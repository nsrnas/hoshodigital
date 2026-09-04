param(
  [string]$Version = '1.7.1',
  [string]$PythonExecutable = ''
)

$ErrorActionPreference = 'Stop'
$repo = Split-Path -Parent $PSScriptRoot
$theme = Join-Path $repo 'wp-content\themes\hosho-digital'
$sourcePlugin = Join-Path $repo 'wordpress-stage-v170\hosho-remade-pages'
$stageRoot = Join-Path $repo ('wordpress-stage-v' + ($Version -replace '\.', ''))
$pluginRoot = Join-Path $stageRoot 'hosho-remade-pages'
$uploadRoot = Join-Path $repo 'upload-material'
$zipPath = Join-Path $uploadRoot ("hosho-remade-pages-v$Version-all-pages.zip")

if (-not (Test-Path -LiteralPath $sourcePlugin)) {
  throw "Base plugin stage was not found: $sourcePlugin"
}
if (-not (Test-Path -LiteralPath $theme)) {
  throw "Combined theme was not found: $theme"
}

if (Test-Path -LiteralPath $stageRoot) {
  $resolvedStage = [IO.Path]::GetFullPath($stageRoot)
  $resolvedRepo = [IO.Path]::GetFullPath($repo)
  if (-not $resolvedStage.StartsWith($resolvedRepo, [StringComparison]::OrdinalIgnoreCase)) {
    throw "Refusing to replace stage outside the repository: $resolvedStage"
  }
  Remove-Item -LiteralPath $stageRoot -Recurse -Force
}

New-Item -ItemType Directory -Path $stageRoot -Force | Out-Null
Copy-Item -LiteralPath $sourcePlugin -Destination $pluginRoot -Recurse -Force
New-Item -ItemType Directory -Path (Join-Path $pluginRoot 'assets\css') -Force | Out-Null
New-Item -ItemType Directory -Path (Join-Path $pluginRoot 'assets\js') -Force | Out-Null
New-Item -ItemType Directory -Path (Join-Path $pluginRoot 'assets\images') -Force | Out-Null
New-Item -ItemType Directory -Path (Join-Path $pluginRoot 'templates') -Force | Out-Null
New-Item -ItemType Directory -Path $uploadRoot -Force | Out-Null

Copy-Item -LiteralPath (Join-Path $theme 'style.css') -Destination (Join-Path $pluginRoot 'assets\css\hosho-remade.css') -Force
Copy-Item -LiteralPath (Join-Path $theme 'assets\site.js') -Destination (Join-Path $pluginRoot 'assets\js\site.js') -Force

function Convert-ThemePhp {
  param(
    [Parameter(Mandatory)] [string]$Source,
    [Parameter(Mandatory)] [string]$Destination
  )

  $content = Get-Content -Raw -LiteralPath $Source
  $content = $content.Replace('hosho_', 'hosho_remade_')
  $content = $content.Replace('get_header();', 'hosho_remade_render_header();')
  $content = $content.Replace('get_footer();', 'hosho_remade_render_footer();')
  $content = $content.Replace("home_url( '/' )", "hosho_remade_page_url( 'home' )")
  [IO.File]::WriteAllText($Destination, $content, [Text.UTF8Encoding]::new($false))
}

$templateMap = [ordered]@{
  'front-page.php'                 = 'page-home.php'
  'page-accessibility.php'         = 'page-accessibility.php'
  'page-ai-quick-win.php'          = 'page-ai-quick-win.php'
  'page-approach.php'              = 'page-approach.php'
  'page-approach-ai.php'           = 'page-innovation.php'
  'page-approach-ams.php'          = 'page-assurance.php'
  'page-approach-erp.php'          = 'page-erp.php'
  'page-approach-optimization.php' = 'page-optimization.php'
  'page-careers.php'               = 'page-careers.php'
  'page-company.php'               = 'page-company.php'
  'page-contact.php'               = 'page-contact.php'
  'page-cookies.php'               = 'page-cookies.php'
  'page-customer-intelligence.php' = 'page-customer-intelligence.php'
  'page-eci.php'                   = 'page-eci.php'
  'page-operational-intelligence.php'= 'page-operational-intelligence.php'
  'page-workforce-intelligence.php'= 'page-workforce-intelligence.php'
  'page-press.php'                 = 'page-press.php'
  'page-privacy-policy.php'        = 'page-privacy-policy.php'
  'page-solutions.php'             = 'page-solutions.php'
  'page-strategy-session.php'      = 'page-strategy-session.php'
  'page-sustainability.php'        = 'page-sustainability.php'
  'page-terms-of-use.php'          = 'page-terms-of-use.php'
}

foreach ($entry in $templateMap.GetEnumerator()) {
  Convert-ThemePhp -Source (Join-Path $theme $entry.Key) -Destination (Join-Path $pluginRoot ('templates\' + $entry.Value))
}
Copy-Item -LiteralPath (Join-Path $pluginRoot 'templates\page-press.php') -Destination (Join-Path $pluginRoot 'templates\page-media.php') -Force
Copy-Item -LiteralPath (Join-Path $pluginRoot 'templates\page-sustainability.php') -Destination (Join-Path $pluginRoot 'templates\page-esg.php') -Force
Convert-ThemePhp -Source (Join-Path $theme 'header.php') -Destination (Join-Path $pluginRoot 'templates\header.php')
Convert-ThemePhp -Source (Join-Path $theme 'footer.php') -Destination (Join-Path $pluginRoot 'templates\footer.php')

$pluginFile = Join-Path $pluginRoot 'hosho-remade-pages.php'
$plugin = Get-Content -Raw -LiteralPath $pluginFile
$plugin = [regex]::Replace($plugin, '(?m)^ \* Version: .+$', " * Version: $Version")
$plugin = [regex]::Replace($plugin, "const VERSION = '[^']+';", "const VERSION = '$Version';")
$plugin = $plugin.Replace("'operational-experience' => 'Operational Experience'", "'operational-experience' => 'Operational Intelligence'")
$plugin = $plugin.Replace("'customer-experience'    => 'Customer Experience'", "'customer-experience'    => 'Customer Intelligence'")
$plugin = $plugin.Replace("'employee-experience'    => 'Employee Experience'", "'employee-experience'    => 'Workforce Intelligence'")

$themeFunctions = Get-Content -Raw -LiteralPath (Join-Path $theme 'functions.php')
$themeFunctions = $themeFunctions.Replace('hosho_', 'hosho_remade_')

function Get-FunctionBlock {
  param(
    [Parameter(Mandatory)] [string]$Content,
    [Parameter(Mandatory)] [string]$StartFunction,
    [Parameter(Mandatory)] [string]$NextFunction
  )
  $start = $Content.IndexOf("function $StartFunction", [StringComparison]::Ordinal)
  $next = $Content.IndexOf("function $NextFunction", $start + 1, [StringComparison]::Ordinal)
  if ($start -lt 0 -or $next -lt 0) { throw "Unable to locate $StartFunction or $NextFunction" }
  return $Content.Substring($start, $next - $start).TrimEnd()
}

function Replace-FunctionBlock {
  param(
    [Parameter(Mandatory)] [string]$Content,
    [Parameter(Mandatory)] [string]$StartFunction,
    [Parameter(Mandatory)] [string]$NextFunction,
    [Parameter(Mandatory)] [string]$Replacement
  )
  $start = $Content.IndexOf("function $StartFunction", [StringComparison]::Ordinal)
  $next = $Content.IndexOf("function $NextFunction", $start + 1, [StringComparison]::Ordinal)
  if ($start -lt 0 -or $next -lt 0) { throw "Unable to replace $StartFunction or $NextFunction" }
  return $Content.Substring(0, $start) + $Replacement.TrimEnd() + "`r`n`r`n" + $Content.Substring($next)
}

$navigation = Get-FunctionBlock -Content $themeFunctions -StartFunction 'hosho_remade_navigation_items()' -NextFunction 'hosho_remade_navigation_item_is_current'
$navigation += "`r`n" + (Get-FunctionBlock -Content $themeFunctions -StartFunction 'hosho_remade_navigation_item_is_current' -NextFunction 'hosho_remade_primary_menu_fallback')
$navigation += "`r`n" + (Get-FunctionBlock -Content $themeFunctions -StartFunction 'hosho_remade_primary_menu_fallback()' -NextFunction 'hosho_remade_render_hero')
$plugin = Replace-FunctionBlock -Content $plugin -StartFunction 'hosho_remade_navigation_items()' -NextFunction 'hosho_remade_render_header' -Replacement $navigation

$hero = Get-FunctionBlock -Content $themeFunctions -StartFunction 'hosho_remade_render_hero(' -NextFunction 'hosho_remade_render_quote'
$quote = Get-FunctionBlock -Content $themeFunctions -StartFunction 'hosho_remade_render_quote(' -NextFunction 'hosho_remade_render_cta'
$ctaStart = $themeFunctions.IndexOf('function hosho_remade_render_cta(', [StringComparison]::Ordinal)
if ($ctaStart -lt 0) { throw 'Unable to locate hosho_remade_render_cta' }
$cta = $themeFunctions.Substring($ctaStart).TrimEnd()
$plugin = Replace-FunctionBlock -Content $plugin -StartFunction 'hosho_remade_render_hero(' -NextFunction 'hosho_remade_render_quote' -Replacement $hero
$plugin = Replace-FunctionBlock -Content $plugin -StartFunction 'hosho_remade_render_quote(' -NextFunction 'hosho_remade_render_cta' -Replacement $quote
$ctaTarget = $plugin.IndexOf('function hosho_remade_render_cta(', [StringComparison]::Ordinal)
if ($ctaTarget -lt 0) { throw 'Unable to replace hosho_remade_render_cta' }
$plugin = $plugin.Substring(0, $ctaTarget) + $cta + "`r`n"
[IO.File]::WriteAllText($pluginFile, $plugin, [Text.UTF8Encoding]::new($false))

$readme = Join-Path $pluginRoot 'readme.txt'
$readmeText = Get-Content -Raw -LiteralPath $readme
$readmeText = [regex]::Replace($readmeText, '(?m)^Stable tag: .+$', "Stable tag: $Version")
[IO.File]::WriteAllText($readme, $readmeText, [Text.UTF8Encoding]::new($false))

# Keep the upload package lean by shipping only assets referenced by the
# generated plugin. The base stage contains historical images that are useful
# as a rollback source but should not be uploaded on every release.
$imageTarget = Join-Path $pluginRoot 'assets\images'
if (Test-Path -LiteralPath $imageTarget) {
  Remove-Item -LiteralPath $imageTarget -Recurse -Force
}
New-Item -ItemType Directory -Path $imageTarget -Force | Out-Null

$sourceText = (Get-ChildItem -LiteralPath $pluginRoot -Recurse -File |
  Where-Object { $_.Extension -in @('.php', '.css', '.js', '.txt') } |
  ForEach-Object { Get-Content -Raw -LiteralPath $_.FullName }) -join "`n"

$assetRoots = @(
  (Join-Path $theme 'assets\images'),
  (Join-Path $sourcePlugin 'assets\images')
)
$copiedAssets = @{}
foreach ($assetRoot in $assetRoots) {
  if (-not (Test-Path -LiteralPath $assetRoot)) { continue }
  $rootPath = [IO.Path]::GetFullPath($assetRoot).TrimEnd('\', '/')
  foreach ($asset in Get-ChildItem -LiteralPath $assetRoot -Recurse -File) {
    if ($asset.Extension.ToLowerInvariant() -notin @('.avif', '.gif', '.jpeg', '.jpg', '.png', '.svg', '.webp')) { continue }
    $relative = $asset.FullName.Substring($rootPath.Length).TrimStart('\', '/').Replace('\', '/')
    if ($copiedAssets.ContainsKey($relative)) { continue }
    if ($sourceText.IndexOf($relative, [StringComparison]::OrdinalIgnoreCase) -lt 0) { continue }

    $destination = Join-Path $imageTarget ($relative.Replace('/', '\'))
    $destinationDirectory = Split-Path -Parent $destination
    New-Item -ItemType Directory -Path $destinationDirectory -Force | Out-Null
    Copy-Item -LiteralPath $asset.FullName -Destination $destination -Force
    $copiedAssets[$relative] = $asset.FullName
  }
}

$literalAssetReferences = [regex]::Matches(
  $sourceText,
  'hosho_remade_asset_url\(\s*[''"]([^''"]+)[''"]',
  [Text.RegularExpressions.RegexOptions]::IgnoreCase
)
$missingAssets = @()
foreach ($match in $literalAssetReferences) {
  $relative = $match.Groups[1].Value.TrimStart('/').Replace('\', '/')
  if (-not (Test-Path -LiteralPath (Join-Path $imageTarget ($relative.Replace('/', '\'))))) {
    $missingAssets += $relative
  }
}
if ($missingAssets.Count -gt 0) {
  throw ('Referenced assets are missing from the package: ' + (($missingAssets | Sort-Object -Unique) -join ', '))
}

# Fail closed when the generated package has lost a core stylesheet, runtime
# hook, or template call. This prevents a valid-looking ZIP that renders as
# unstyled WordPress markup.
$cssPath = Join-Path $pluginRoot 'assets\css\hosho-remade.css'
$jsPath = Join-Path $pluginRoot 'assets\js\site.js'
$headerPath = Join-Path $pluginRoot 'templates\header.php'
$footerPath = Join-Path $pluginRoot 'templates\footer.php'
$requiredFiles = @($pluginFile, $cssPath, $jsPath, $headerPath, $footerPath)
foreach ($requiredFile in $requiredFiles) {
  if (-not (Test-Path -LiteralPath $requiredFile -PathType Leaf)) {
    throw "Required plugin file is missing: $requiredFile"
  }
}

$cssFile = Get-Item -LiteralPath $cssPath
if ($cssFile.Length -lt 300000) {
  throw "Generated stylesheet is unexpectedly small ($($cssFile.Length) bytes): $cssPath"
}

$generatedCss = Get-Content -Raw -LiteralPath $cssPath
$requiredSelectors = @(
  'body.hosho-remade',
  '.site-header',
  '.page-hero',
  'body.page-company .company-why',
  '.site-footer'
)
foreach ($selector in $requiredSelectors) {
  if ($generatedCss.IndexOf($selector, [StringComparison]::Ordinal) -lt 0) {
    throw "Required selector is missing from generated stylesheet: $selector"
  }
}

$generatedPlugin = Get-Content -Raw -LiteralPath $pluginFile
foreach ($runtimeMarker in @('filemtime( $css_path )', 'nocache_headers()', "do_action( 'litespeed_purge_all' )")) {
  if ($generatedPlugin.IndexOf($runtimeMarker, [StringComparison]::Ordinal) -lt 0) {
    throw "Required WordPress runtime hardening is missing: $runtimeMarker"
  }
}

if ((Get-Content -Raw -LiteralPath $headerPath).IndexOf('wp_head()', [StringComparison]::Ordinal) -lt 0) {
  throw 'Generated header template is missing wp_head().'
}
if ((Get-Content -Raw -LiteralPath $footerPath).IndexOf('wp_footer()', [StringComparison]::Ordinal) -lt 0) {
  throw 'Generated footer template is missing wp_footer().'
}

if (-not $PythonExecutable) {
  $pythonCommand = Get-Command python -ErrorAction SilentlyContinue
  if ($pythonCommand) {
    $PythonExecutable = $pythonCommand.Source
  } else {
    $bundledPython = Join-Path $env:USERPROFILE '.cache\codex-runtimes\codex-primary-runtime\dependencies\python\python.exe'
    if (Test-Path -LiteralPath $bundledPython) { $PythonExecutable = $bundledPython }
  }
}
if ($PythonExecutable -and (Test-Path -LiteralPath $PythonExecutable)) {
  & $PythonExecutable (Join-Path $PSScriptRoot 'optimize-wordpress-images.py') $imageTarget --max-dimension 2560
  if ($LASTEXITCODE -ne 0) { throw 'Image optimization failed.' }
} else {
  Write-Warning 'Python with Pillow was not found; images were packaged without optimization.'
}

if (Test-Path -LiteralPath $zipPath) { Remove-Item -LiteralPath $zipPath -Force }
Compress-Archive -LiteralPath $pluginRoot -DestinationPath $zipPath -CompressionLevel Optimal

$zipEntries = [IO.Compression.ZipFile]::OpenRead($zipPath)
try {
  $entryNames = @($zipEntries.Entries | ForEach-Object { $_.FullName.Replace('\', '/') })
  $invalidRoots = @($entryNames | Where-Object { $_ -and -not $_.StartsWith('hosho-remade-pages/', [StringComparison]::OrdinalIgnoreCase) })
  if ($invalidRoots.Count -gt 0) {
    throw ('ZIP contains entries outside the single plugin root: ' + ($invalidRoots -join ', '))
  }
  $entryPoint = 'hosho-remade-pages/hosho-remade-pages.php'
  if ($entryNames -notcontains $entryPoint) {
    throw "ZIP plugin entry point is missing: $entryPoint"
  }
} finally {
  $zipEntries.Dispose()
}

[PSCustomObject]@{
  Version = $Version
  Stage = $pluginRoot
  Zip = $zipPath
  Templates = (Get-ChildItem -LiteralPath (Join-Path $pluginRoot 'templates') -File).Count
  Assets = (Get-ChildItem -LiteralPath (Join-Path $pluginRoot 'assets') -Recurse -File).Count
}
