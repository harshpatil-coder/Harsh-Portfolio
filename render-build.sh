#!/bin/bash

# Install PHP dependencies
composer install --optimize-autoloader --no-dev

# Install Node.js dependencies and build assets
npm install
npm run build

# Set up Laravel
php artisan storage:link
php artisan config:cache
php artisan route:cache
php artisan view:cache
