<p align="center">
  <a href="http://www.frooxi.com">
    <picture>
      <source media="(prefers-color-scheme: dark)" srcset="https://raw.githubusercontent.com/bagisto/temp-media/0b0984778fae92633f57e625c5494ead1fe320c3/dark-logo-P5H7MBtx.svg">
      <source media="(prefers-color-scheme: light)" srcset="https://bagisto.com/wp-content/themes/bagisto/images/logo.png">
      <img src="https://bagisto.com/wp-content/themes/bagisto/images/logo.png" alt="Frooxi logo">
    </picture>
  </a>
</p>

<p align="center">
    <a href="https://packagist.org/packages/frooxi/frooxi"><img src="https://poser.pugx.org/bagisto/bagisto/d/total.svg" alt="Total Downloads"></a>
    <a href="https://packagist.org/packages/frooxi/frooxi"><img src="https://poser.pugx.org/bagisto/bagisto/v/stable.svg" alt="Latest Stable Version"></a>
    <a href="https://packagist.org/packages/frooxi/frooxi"><img src="https://poser.pugx.org/bagisto/bagisto/license.svg" alt="License"></a>
</p>

<p align="center">
    ➡️ <a href="https://frooxi.com/en/">Website</a> | <a href="https://devdocs.frooxi.com/">Documentation</a> | <a href="https://devdocs.frooxi.com/2.4/introduction/installation.html#installation">Installation Guide</a> | <a href="https://devdocs.frooxi.com/2.4/introduction/docker.html">Docker Installation</a> ⬅️
</p>

<p align="center" style="display: inline;">
    <img class="flag-img" src="https://flagicons.lipis.dev/flags/4x3/ar.svg" alt="Arabic" width="24" height="24">
    <img class="flag-img" src="https://flagicons.lipis.dev/flags/4x3/de.svg" alt="German" width="24" height="24">
    <img class="flag-img" src="https://flagicons.lipis.dev/flags/4x3/us.svg" alt="English" width="24" height="24">
    <img class="flag-img" src="https://flagicons.lipis.dev/flags/4x3/es.svg" alt="Spanish" width="24" height="24">
    <img class="flag-img" src="https://flagicons.lipis.dev/flags/4x3/bd.svg" alt="Bengali" width="24" height="24">
    <img class="flag-img" src="https://flagicons.lipis.dev/flags/4x3/it.svg" alt="Italian" width="24" height="24">
    <img class="flag-img" src="https://flagicons.lipis.dev/flags/4x3/nl.svg" alt="Dutch" width="24" height="24">
    <img class="flag-img" src="https://flagicons.lipis.dev/flags/4x3/pl.svg" alt="Polish" width="24" height="24">
    <img class="flag-img" src="https://flagicons.lipis.dev/flags/4x3/pt.svg" alt="Portuguese" width="24" height="24">
    <img class="flag-img" src="https://flagicons.lipis.dev/flags/4x3/tr.svg" alt="Turkish" width="24" height="24">
    <img class="flag-img" src="https://flagicons.lipis.dev/flags/4x3/cn.svg" alt="Chinese" width="24" height="24">
</p>

# Introduction

Frooxi is an open-source [laravel eCommerce](https://www.frooxi.com/) platform built on some of the hottest technologies such as [Laravel](https://laravel.com/) (a [PHP](https://secure.php.net/) framework) and [Vue.js](https://vuejs.org/) a progressive JavaScript framework.

Frooxi can help you cut down your time, cost, and workforce for building online stores or migrating from physical stores to the ever-demanding online world. Your business—whether small or huge—can benefit. The best part, it's straightforward to set it up!

# Getting Started

[Install Frooxi](https://devdocs.frooxi.com/2.4/introduction/installation.html#install-using-gui-installer) with or without Composer (Check [Requirement Details](https://frooxi.com/en/download/))

You can browse through the Free [Live Demo](https://demo.frooxi.com/)

## Features

- 🛍️ **Product Management** - Simple, configurable, grouped, bundled, downloadable, and virtual products
- 📂 **Category Management** - Hierarchical categories with filtering and navigation
- 👥 **Customer Management** - Customer groups, segmentation, and targeted pricing
- 🛒 **Shopping Cart & Checkout** - Smooth checkout flow with multiple payment gateways
- 📦 **Order Management** - Complete order lifecycle with invoices, shipments, and refunds
- 🌍 **Multi-locale & Multi-currency** - Support for 21+ languages and multiple currencies
- 🎨 **Theme System** - Customizable storefront and admin themes
- 🔌 **Extension System** - 100+ extensions available for extended functionality

## System Requirements

- **PHP**: 8.3 or higher
- **Database**: MySQL 8.0+ or MariaDB 10.3+
- **Web Server**: Apache or Nginx
- **Composer**: Latest stable version
- **Node.js & NPM**: For frontend asset compilation

## Installation

```bash
# Clone the repository
git clone https://github.com/frooxi/frooxi.git

# Navigate to the project directory
cd frooxi

# Install PHP dependencies
composer install

# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Configure your database in .env file
# DB_DATABASE=frooxi
# DB_USERNAME=root
# DB_PASSWORD=

# Run the installer
php artisan bagisto:install

# Build frontend assets
cd packages/Webkul/Admin && npm install && npm run build
cd ../Shop && npm install && npm run build
cd ../../..

# Start the development server
php artisan serve
```

Visit `http://localhost:8000` to access your store and `http://localhost:8000/admin` for the admin panel.

## Commerce For Every Need

With Frooxi, you can easily create use cases for various commerce needs like Marketplaces, PWA, Native Mobile Apps, Multi-Tenant systems, and many more.

## Community

Get Frooxi support on our community channels. Would like to help us build the most developer-friendly E-Commerce platform? Start by reading our [Contributing Guide](https://github.com/frooxi/frooxi/blob/master/.github/CONTRIBUTING.md)!

## License

Frooxi is a fully open-source Laravel eCommerce platform that will always remain free under the [MIT License](https://github.com/frooxi/frooxi/blob/master/LICENSE).

## Security Vulnerabilities

If you think that you have found a security issue in Frooxi, please do not use the issue tracker and do not post it publicly. Instead, all security issues must be sent to [mailto:support@frooxi.com](mailto:support@frooxi.com).
