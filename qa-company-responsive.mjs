import { chromium } from 'file:///C:/Users/Evan/.cache/codex-runtimes/codex-primary-runtime/dependencies/node/node_modules/playwright/index.mjs';

const origin = process.env.ORIGIN || 'http://127.0.0.1:8183';
const browser = await chromium.launch({ headless: true, executablePath: 'C:/Program Files/Google/Chrome/Application/chrome.exe' });
let failed = false;

for (const [label, viewport] of Object.entries({
  desktop: { width: 1440, height: 1000 },
  tablet: { width: 937, height: 1000 },
  mobile: { width: 390, height: 844 },
})) {
  const page = await browser.newPage({ viewport });
  const errors = [];
  page.on('pageerror', (error) => errors.push(error.message));
  page.on('requestfailed', (request) => {
    if (request.url().startsWith(origin)) errors.push(`${request.failure()?.errorText}: ${request.url()}`);
  });
  page.on('response', (pageResponse) => {
    if (pageResponse.url().startsWith(origin) && pageResponse.status() >= 400 && !pageResponse.url().endsWith('/favicon.ico')) {
      errors.push(`${pageResponse.status()}: ${pageResponse.url()}`);
    }
  });
  const response = await page.goto(`${origin}/company/`, { waitUntil: 'networkidle' });
  await page.evaluate(() => document.querySelectorAll('.motion').forEach((node) => node.classList.add('is-visible')));
  const result = await page.evaluate(() => {
    const why = document.querySelector('.company-why__grid');
    const values = document.querySelector('.company-values__window');
    const quote = document.querySelector('.quote-band--lee');
    const seal = document.querySelector('.company-seal');
    const body = document.documentElement;
    return {
      overflow: body.scrollWidth > body.clientWidth,
      whyVisible: Boolean(why && why.getBoundingClientRect().height > 100),
      valuesVisible: Boolean(values && values.getBoundingClientRect().height > 300),
      quoteVisible: Boolean(quote && quote.getBoundingClientRect().height > 300),
      sealVisible: Boolean(seal && seal.getBoundingClientRect().width > 80),
    };
  });
  const report = { label, status: response?.status(), ...result, errors };
  console.log(JSON.stringify(report));
  if (report.status !== 200 || report.overflow || !report.valuesVisible || !report.whyVisible || !report.quoteVisible || !report.sealVisible || errors.length) failed = true;
  await page.screenshot({ path: `qa-company-${label}.png`, fullPage: true });
  await page.close();
}

await browser.close();
if (failed) process.exit(1);
