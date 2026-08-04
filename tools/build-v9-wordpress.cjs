const fs = require("fs");
const path = require("path");

const projectRoot = path.resolve(__dirname, "..");
const workspaceRoot = path.resolve(projectRoot, "..", "..");
const sourceRoot = path.join(workspaceRoot, "Figma Work", "v9 Recontent Old Design");
const themeRoot = path.join(projectRoot, "wp-content", "themes", "hosho-digital");
const assetRoot = path.join(themeRoot, "assets", "v9");

const pages = [
  {
    slug: "careers",
    name: "Careers",
    source: "careers.html",
    body: ["page-careers", "page-careers-recolor", "editorial-v3"],
  },
  {
    slug: "sustainability",
    name: "Sustainability",
    source: "sustainability/sustainability.html",
    body: ["page-sustainability", "editorial-v3"],
  },
  {
    slug: "press",
    name: "Press",
    source: "press/press.html",
    body: ["page-press", "editorial-v3"],
  },
  {
    slug: "contact",
    name: "Contact",
    source: "contact/contact.html",
    body: ["page-contact", "editorial-v3"],
  },
  {
    slug: "company",
    name: "Company",
    source: "company/company.html",
    body: ["page-company"],
  },
  {
    slug: "ai-quick-win",
    name: "AI Quick Win Programme",
    source: "ai-quick-win/ai-quick-win.html",
    body: ["page-quickwin", "editorial-v3"],
  },
  {
    slug: "eci",
    name: "ECI Programme",
    source: "eci/eci.html",
    body: ["page-eci", "editorial-v3"],
  },
];

const pageSlugs = new Map([
  ["careers.html", "careers"],
  ["sustainability.html", "sustainability"],
  ["press.html", "press"],
  ["contact.html", "contact"],
  ["company.html", "company"],
  ["ai-quick-win.html", "ai-quick-win"],
  ["eci.html", "eci"],
]);

function ensureDirectory(directory) {
  fs.mkdirSync(directory, { recursive: true });
}

function copyFile(relativePath) {
  const source = path.join(sourceRoot, relativePath);
  const destination = path.join(assetRoot, relativePath);
  ensureDirectory(path.dirname(destination));
  fs.copyFileSync(source, destination);
}

function copyDirectory(relativePath) {
  const source = path.join(sourceRoot, relativePath);
  const destination = path.join(assetRoot, relativePath);
  ensureDirectory(path.dirname(destination));
  fs.cpSync(source, destination, { recursive: true, force: true });
}

function normalizeRelativeAsset(pageSource, reference) {
  const pageDirectory = path.posix.dirname(pageSource.replaceAll("\\", "/"));
  return path.posix.normalize(path.posix.join(pageDirectory, reference));
}

function phpAsset(relativePath) {
  return `<?php echo esc_url( hosho_v9_asset_url( '${relativePath}' ) ); ?>`;
}

function convertMain(page) {
  const sourcePath = path.join(sourceRoot, page.source);
  const html = fs.readFileSync(sourcePath, "utf8");
  const mainMatch = html.match(/<main([^>]*)>([\s\S]*?)<\/main>/i);

  if (!mainMatch) {
    throw new Error(`No <main> element found in ${page.source}`);
  }

  let attributes = mainMatch[1];
  if (!/\bid\s*=/.test(attributes)) {
    attributes += ' id="main-content"';
  } else {
    attributes = attributes.replace(/\bid=(['"])[^'"]+\1/, 'id="main-content"');
  }

  let main = `<main${attributes}>${mainMatch[2]}</main>`;

  main = main.replace(/\bsrc=(['"])([^'"]+)\1/g, (match, quote, reference) => {
    if (/^(?:https?:|data:|blob:|\/\/)/i.test(reference)) {
      return match;
    }

    const resolved = normalizeRelativeAsset(page.source, reference);
    return `src="${phpAsset(resolved)}"`;
  });

  main = main.replace(/\bhref=(['"])([^'"]+\.html(?:#[^'"]*)?)\1/g, (match, quote, reference) => {
    const [fileName, fragment = ""] = reference.split("#");
    const slug = pageSlugs.get(path.posix.basename(fileName));
    if (!slug) return match;
    const suffix = fragment ? ` . '#${fragment}'` : "";
    return `href="<?php echo esc_url( hosho_page_url( '${slug}' )${suffix} ); ?>"`;
  });

  const template = `<?php
/**
 * Template Name: ${page.name}
 * Template Post Type: page
 *
 * Generated from the approved V9 Recontent design. Re-run
 * tools/build-v9-wordpress.cjs after changing the source HTML.
 *
 * @package Hosho_Digital
 */

get_header();
?>
${main}
<?php
get_footer();
`;

  fs.writeFileSync(path.join(themeRoot, `page-${page.slug}.php`), template, "utf8");
}

ensureDirectory(assetRoot);

for (const file of [
  "styles.css",
  "editorial-v3.css",
  "recontent-v9.css",
  "brand-shell-v10.css",
  "script.js",
  "editorial-v3.js",
  "brand-shell-v10.js",
]) {
  copyFile(file);
}

for (const directory of ["assets", "recontent-assets"]) {
  copyDirectory(directory);
}

for (const page of pages.filter((item) => item.slug !== "careers")) {
  const directory = path.posix.dirname(page.source);
  for (const file of ["styles.css", "script.js"]) {
    copyFile(`${directory}/${file}`);
  }
  copyDirectory(`${directory}/assets`);
}

for (const file of [
  "ai-quick-win/ai-quick-win.css",
  "eci/eci.css",
  "eci/eci-framework-fix.css",
]) {
  copyFile(file);
}

for (const page of pages) {
  convertMain(page);
}

const manifest = {
  generatedAt: new Date().toISOString(),
  source: sourceRoot,
  pages: pages.map(({ slug, source, body }) => ({ slug, source, body })),
};

fs.writeFileSync(
  path.join(assetRoot, "manifest.json"),
  `${JSON.stringify(manifest, null, 2)}\n`,
  "utf8"
);

console.log(`Generated ${pages.length} WordPress templates from ${sourceRoot}`);
