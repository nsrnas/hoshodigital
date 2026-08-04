# Evan's HOSHŌ DIGITAL WordPress Folder

Custom WordPress theme made from the my approved Evan's Personal Folder **V9 Recontent Old Design** batch. The implementation covers seven pages:

| Page | WordPress slug | Template |
| --- | --- | --- |
| Careers | `/careers/` | `page-careers.php` |
| Sustainability | `/sustainability/` | `page-sustainability.php` |
| Press | `/press/` | `page-press.php` |
| Contact | `/contact/` | `page-contact.php` |
| Company | `/company/` | `page-company.php` |
| AI Quick Win | `/ai-quick-win/` | `page-ai-quick-win.php` |
| Enterprise Compute Initiative | `/eci/` | `page-eci.php` |

AI Quick Win currently uses the approved image hero, not the optional video experiment.

## Quick preview without WordPress

Open PowerShell in this project folder and run:

```powershell
C:\xampp\php\php.exe -S 127.0.0.1:4312 -t . preview\router.php
```

Then open any page from the table above, for example:

- <http://127.0.0.1:4312/careers/>
- <http://127.0.0.1:4312/ai-quick-win/>
- <http://127.0.0.1:4312/eci/>

Add `?figma=1` when a static, fully revealed frame is needed for HTML-to-Figma capture.

## Install in XAMPP and WordPress

1. Start Apache and MySQL from XAMPP.
2. Install WordPress in a local folder such as `C:\xampp\htdocs\hosho`.
3. Copy `wp-content/themes/hosho-digital` into the WordPress themes directory.
4. Activate **HOSHŌ DIGITAL** in **Appearance → Themes**.
5. Create the seven pages using the exact slugs in the table above.
6. Open **Settings → Permalinks**, choose **Post name**, and save.

For live editing, a directory junction can connect the WordPress theme folder to this workspace:

```powershell
New-Item -ItemType Junction `
  -Path 'C:\xampp\htdocs\hosho\wp-content\themes\hosho-digital' `
  -Target 'D:\Work & Organization\Work\Hosho Digital\Projects\Hosho Digital Web\wp-content\themes\hosho-digital'
```

## Source synchronization

The V9 HTML, CSS, JavaScript, and local images are mirrored into `assets/v9`. Rebuild the PHP templates and refresh the mirrored assets after an approved V9 source change:

```powershell
node tools\build-v9-wordpress.cjs
```

The generated PHP templates must not be edited for content. Make approved content or layout changes in the V9 source, then run the builder again. WordPress-specific integration belongs in:

- `functions.php`
- `header.php`
- `footer.php`
- `assets/css/v9-wordpress.css`
- `assets/css/v9-motion.css`
- `assets/js/v9-motion.js`

## Motion and accessibility

- Motion uses transform and opacity for smooth rendering.
- Headings, editorial media, hero imagery, and scroll progress are choreographed progressively.
- The mobile navigation supports click, outside-click, and Escape-key dismissal.
- `prefers-reduced-motion` receives a static layout with no decorative animation.
- `?figma=1` disables motion and exposes the final visual state for capture.

## Content rules

- Keep copy aligned with the approved HOSHŌ website, deck, and V9 designs.
- Do not add claims, data, processes, programme promises, customer names, or testimonials without written approval.
- Store all production assets locally; do not use Temp paths or runtime image hotlinks.
- See `docs/CONTENT-GUARDRAILS.md`.
