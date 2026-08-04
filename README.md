# HOSHŌ DIGITAL — Custom WordPress Theme

Custom WordPress theme for the **HOSHŌ DIGITAL** web redesign project. This implementation covers seven core pages:

| Page | WordPress Slug | Template |
| --- | --- | --- |
| Careers | `/careers/` | `page-careers.php` |
| Sustainability | `/sustainability/` | `page-sustainability.php` |
| Press | `/press/` | `page-press.php` |
| Contact | `/contact/` | `page-contact.php` |
| Company | `/company/` | `page-company.php` |
| AI Quick Win | `/ai-quick-win/` | `page-ai-quick-win.php` |
| Enterprise Compute Initiative | `/eci/` | `page-eci.php` |

---

## Quick Local Preview (Without Full WordPress Setup)

If you want to quickly test or review the static pages without setting up a database/WordPress environment:

1. Open PowerShell / Terminal in this project root directory.
2. Run the PHP built-in server:
   ```powershell
   php -S 127.0.0.1:4312 -t . preview/router.php