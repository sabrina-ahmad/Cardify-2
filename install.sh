#!/bin/bash

# Step 1: Install npm dependencies
echo "Installing npm dependencies..."
npm install

# Step 2: Install Composer dependencies
echo "Installing Composer dependencies..."
composer install

# Step 3: Run Laravel migrations (fresh)
echo "Running Laravel migrations..."
php artisan migrate:fresh

echo "Installation complete!"
