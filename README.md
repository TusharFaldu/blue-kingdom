# 🎨 Blue Kingdom – WordPress Theme (Sage 11 + Tailwind CSS)

Blue Kingdom is a modern WordPress theme built using the Sage 11 starter theme by Roots, styled with Tailwind CSS, and structured with Laravel Blade templating.

## 🚀 Tech Stack

- WordPress
- Sage 11 (by Roots)
- Tailwind CSS
- Laravel Blade Templating
- Bud (Webpack-based builder)
- Composer
- Node.js / npm

## 📦 Installation

### 1. Clone the theme into your WordPress themes directory

```bash
cd wp-content/themes
git clone https://github.com/yourusername/blue-kingdom.git
cd blue-kingdom

2. Install PHP dependencies via Composer
composer install

3. Install JavaScript dependencies
npm install

4. Copy and configure the .env file
cp .env.example .env

Edit .env and set your local development URL:
WP_HOME=http://bluekingdom.local

5. Compile theme assets For development:
npm run dev

