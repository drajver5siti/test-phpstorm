#!/bin/bash

echo "Initializing project"
composer install --no-interaction
# Necessary for development

touch .env
echo "APP_ENV=swc" >> .env
echo "DB_DATABASE=swc" >> .env
echo "DB_USERNAME=swc" >> .env
echo "DB_PASSWORD=swc" >> .env
echo "APP_ENV=local" >> .env
echo "APP_DEBUG=true" >> .env
echo "APP_KEY=" >> .env


./vendor/bin/sail up -d
./vendor/bin/sail artisan key:generate --force


touch "initialized"
