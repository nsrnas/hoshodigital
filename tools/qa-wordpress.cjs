const fs = require("fs");
const path = require("path");

const projectRoot = path.resolve(__dirname, "..");
const themeRoot = path.join(projectRoot, "wp-content", "themes", "hosho-digital");
const assetRoot = path.join(themeRoot, "assets", "v9");
const slugs = ["careers", "sustainability", "press", "contact", "company", "ai-quick-win", "eci"];
const errors = [];
const assetOwners = new Map();

for (const slug of slugs) {
  const templatePath = path.join(themeRoot, `page-${slug}.php`);
  if (!fs.existsSync(templatePath)) {
    errors.push(`Missing template: page-${slug}.php`);
    continue;
  }

  const template = fs.readFileSync(templatePath, "utf8");
  const assetPattern = /hosho_v9_asset_url\(\s*'([^']+)'\s*\)/g;
  const pageAssets = [];
  let match;

  while ((match = assetPattern.exec(template))) {
    const relativePath = match[1];
    const absolutePath = path.join(assetRoot, ...relativePath.split("/"));
    pageAssets.push(relativePath);

    if (!fs.existsSync(absolutePath)) {
      errors.push(`${slug}: missing asset ${relativePath}`);
    }
  }

  for (const relativePath of new Set(pageAssets)) {
    const owners = assetOwners.get(relativePath) || [];
    owners.push(slug);
    assetOwners.set(relativePath, owners);
  }

  if (/\b(?:AppData|[A-Z]:[\\/]|\\Temp\\)\b/i.test(template)) {
    errors.push(`${slug}: contains a local machine path`);
  }

  if (/\bsrc=["']https?:\/\//i.test(template)) {
    errors.push(`${slug}: contains a runtime image hotlink`);
  }

  if (/\b(?:affordable|cheap|Hokusai|Hiroshige)\b/i.test(template)) {
    errors.push(`${slug}: contains forbidden or superseded copy`);
  }

  if (slug === "ai-quick-win" && /<video\b/i.test(template)) {
    errors.push("ai-quick-win: video hero found; image version is required");
  }
}

for (const [asset, owners] of assetOwners) {
  if (owners.length > 1 && !/hosho-mark\.svg$/i.test(asset)) {
    errors.push(`Content asset reused across pages: ${asset} (${owners.join(", ")})`);
  }
}

if (errors.length) {
  console.error(errors.join("\n"));
  process.exit(1);
}

console.log(`Checked ${slugs.length} WordPress templates.`);
console.log(`Resolved ${assetOwners.size} local V9 assets with no cross-page content-image reuse.`);
console.log("No forbidden copy, local paths, hotlinked images, or AI Quick Win video hero found.");
