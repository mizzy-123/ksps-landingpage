# KSPS Theme — WordPress Installation Guide

This guide explains how to install, activate, and maintain the KSPS WordPress
theme.

## Prerequisites

- WordPress 6.x
- PHP 8.0+
- Web server (Laragon on Windows, XAMPP, or any LAMP/LEMP stack)
- Optional: Node.js 18+ and npm (for rebuilding CSS)

## Theme Installation

### Option A: Copy into wp-content

1. Locate the theme folder: `wp-theme/ksps-theme`.
2. Copy the entire `ksps-theme` folder into your WordPress `wp-content/themes/`
   directory.
   - Example (Laragon):
     `C:\laragon\www\your-wp-site\wp-content\themes\ksps-theme`
3. In WordPress Admin → Appearance → Themes, activate “KSPS Theme”.

### Option B: Upload as ZIP

1. Zip the `ksps-theme` folder.
2. WordPress Admin → Appearance → Themes → Add New → Upload Theme.
3. Select the ZIP and install, then activate.

## Initial Configuration

- Settings → Permalinks: set to “Post name”.
- Appearance → Menus: create menus and assign them to
  - “Primary” (header navigation)
  - “Footer” (footer links)
- Settings → Reading: choose your homepage if you use a static front page
  (optional).

## Assets (CSS/JS)

The theme ships with compiled assets under `assets/css` and `assets/js`.

- CSS: `assets/css/output.css`, `assets/css/overrides.css`
- JS: `assets/js/*.js` (menu, carousel, testimonials, trust modal, faq, countup)

If you modify styles and want to rebuild CSS with Tailwind CLI:

1. Ensure Node.js and npm are installed.
2. From the project root, run:
   ```bash
   npx tailwindcss -i src/css/input.css -o wp-theme/ksps-theme/assets/css/output.css --minify
   ```
3. Reload your WordPress site to see changes.

## Content & Data

- FAQ data: `assets/data/faq.json`
  - Edit this JSON to update FAQ entries.
- Images: `assets/images`
  - Trust cards and modal use logos and banners from this folder.

## Trust Modal Notes

- The theme sets a global `KSPS_ASSETS_URL` so the trust modal can resolve theme
  image paths.
- If a trust card image or logo doesn’t appear:
  - Confirm files exist in `assets/images`.
  - Check browser console for 404s.
  - Ensure the theme is active and scripts are loaded (no caching/minification
    conflicts).

## File Structure Overview

- `front-page.php`: Home page assembly (includes sections).
- `template-parts/section-*.php`: Editable sections (hero, partners, problem,
  solution, testimonials, trust, standards, CTA, FAQ).
- `assets/`: Compiled CSS/JS, images, and data used by the theme.
- `functions.php`: Enqueues assets and sets up theme features.

## Troubleshooting

- Styles not applying: verify `assets/css/output.css` is present and enqueued.
- JS interactions not working (menus/carousels/modals): confirm `assets/js/*.js`
  are loading and no plugin conflicts.
- Images broken: check the exact file path under `assets/images` and clear
  browser/server cache.
- Menus missing: create and assign menus in Appearance → Menus.

## Development Tips

- Edit section markup in `template-parts/` to adjust layout/content.
- Keep changes minimal and focused to preserve consistency across sections.
- When updating images, prefer transparent (removebg) variants to match static
  design.

## Support

If you need help integrating or customizing this theme, contact your site
administrator or developer.
