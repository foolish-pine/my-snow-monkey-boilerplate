# my-snow-monkey-boilerplate

A development boilerplate based on the official My Snow Monkey plugin template. My Snow Monkey is an official plugin provided by the Snow Monkey theme team for customizing the [Snow Monkey](https://snow-monkey.2inc.org/) theme. This boilerplate provides a structured development environment with modern tooling for CSS processing, code linting, and automated workflows.

## Features

-   **Modern CSS Pipeline**: PostCSS with imports, nesting, and automatic vendor prefixing
-   **Code Quality**: Automated linting and formatting for PHP and CSS
-   **Local Development**: WordPress local environment with browser-sync live reload
-   **Git Hooks**: Pre-commit hooks for automatic code formatting and linting
-   **Dependency Management**: Automated dependency updates with Renovate

## Requirements

-   [Docker](https://www.docker.com/products/docker-desktop/)
-   [Volta](https://volta.sh/)
-   [PHP](https://www.php.net/) 8.3 or later
-   [Composer](https://getcomposer.org/)
-   [Snow Monkey](https://snow-monkey.2inc.org/) theme (purchased separately)

## Installation

1. Clone this repository:

```bash
git clone https://github.com/foolish-pine/my-snow-monkey-boilerplate
cd my-snow-monkey-boilerplate
```

2. Install Node.js dependencies (git hooks will be automatically set up):

```bash
npm install
```

3. Install PHP dependencies:

```bash
composer install
```

## Development Setup

### Starting Local WordPress Environment

This project uses `@wordpress/env` for local development:

```bash
# Start WordPress environment (accessible at http://localhost:8888)
npm run wp-env start

# Stop the environment
npm run wp-env stop
```

The plugin will be automatically mapped to `wp-content/plugins/my-snow-monkey` in the WordPress installation.

### Installing and Activating Snow Monkey Theme

1. Access WordPress admin at `http://localhost:8888/wp-admin` (default credentials: admin/password)
2. Install and activate the Snow Monkey theme
3. Activate the "My Snow Monkey" plugin from the Plugins page

**Note:** This plugin only works when the Snow Monkey theme is active.

### Development Workflow

Start the development server with file watching and live reload:

```bash
npm run watch
```

This will:

-   Watch CSS files and rebuild on changes
-   Start browser-sync proxy server at `http://localhost:3000` (proxying `http://localhost:8888`)
-   Automatically reload the browser when files change

## Available Scripts

### Building

```bash
# Build all assets (CSS)
npm run build

# Build CSS only
npm run build:styles
```

The build process compiles CSS files from `src/styles/` through PostCSS (with imports, nesting, vendor prefixing, and minification) and outputs the result to `dist/style.css`, which is automatically loaded in WordPress.

### Linting

```bash
# Run all linters
npm run lint

# Lint CSS files
npm run lint:stylelint

# Check code formatting
npm run lint:prettier

# Lint PHP files
composer lint
```

### Fixing

```bash
# Auto-fix all issues
npm run fix

# Fix CSS issues
npm run fix:stylelint

# Fix code formatting
npm run fix:prettier

# Fix PHP issues
composer fix
```

## Customization

### Adding CSS Styles

1. Place your CSS files in the `src/styles/` directory
2. Import them in `src/styles/style.css`:

```css
@import url( your-custom-file.css );
```

3. Run `npm run build` or `npm run watch` to compile

Your compiled CSS will be output to `dist/style.css` and automatically loaded in WordPress.

## Recommended IDE/Tools

This project is optimized for **Visual Studio Code** (or compatible forks like Cursor). When you open the project in VS Code, you will be prompted to install the recommended extensions.

### Recommended Extensions

-   [EditorConfig](https://marketplace.visualstudio.com/items?itemName=EditorConfig.EditorConfig) - Maintains consistent coding styles
-   [Prettier](https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode) - Code formatter
-   [Stylelint](https://marketplace.visualstudio.com/items?itemName=stylelint.vscode-stylelint) - CSS linter
-   [PHP Sniffer & Beautifier](https://marketplace.visualstudio.com/items?itemName=valeryanm.vscode-phpsab) - PHP code formatting and linting

The workspace settings are pre-configured to:

-   Format code automatically on save
-   Use WordPress coding standards for PHP
-   Lint and fix CSS with Stylelint

## Code Quality

This project follows:

-   WordPress Coding Standards for PHP
-   WordPress Stylelint Configuration for CSS
-   WordPress Prettier Configuration for formatting

## Related

-   [Snow Monkey Theme](https://snow-monkey.2inc.org/)
-   [Snow Monkey Documentation](https://snow-monkey.2inc.org/manual/)
