# ElementalEdge Theme Structure

## Root Directory

Contains the primary theme files.

- `style.css` - The main stylesheet that includes the theme header information.
- `functions.php` - Contains all the theme's functions, hooks, and WordPress actions.
- `index.php` - The main template file; acts as a fallback if specific templates aren't found.
- `screenshot.png` - The theme's thumbnail displayed in the WordPress dashboard.

## Header and Footer

- `header.php` - The header template file.
- `footer.php` - The footer template file.

## Templates

Custom page templates for various layouts and functionalities.

- `page.php` - Standard page template.
- `single.php` - Single blog post template.
- `archive.php` - Archive template (for categories, tags, etc.).
- `404.php` - Template for 'Page Not Found' errors.

## Template Parts

Modular parts of templates for reusability.

- `/template-parts` - Folder for storing various template parts.
  - `content.php` - Template part for displaying a post or page content.
  - `navigation.php` - Template part for navigation menus.

## CSS and JavaScript

Stylesheets and scripts.

- `/css` - Folder for CSS files.
- `/js` - Folder for JavaScript files.

## Includes

Additional PHP files for various functionalities.

- `/inc` - Folder for extra PHP files like customizer settings or additional functions.

## Languages

Localization files.

- `/languages` - Folder containing .po and .mo files for theme translation.

## Assets

Static resources such as images and fonts.

- `/assets` - Folder for images, fonts, and other static files.

## WooCommerce (optional)

Custom templates and functionalities for WooCommerce integration (if applicable).

- `/woocommerce` - Folder containing WooCommerce overrides and templates.

## Child Theme (optional)

A basic child theme structure if provided.

- `/child-theme` - Folder containing a basic child theme.

## Documentation (optional)

Theme documentation for users.

- `/documentation` - Folder with documentation files.

## License

License information for the theme.

- `LICENSE.txt` - The text file containing the theme's license details.
