
## Installation Package locally

You can install the package via composer:
Create Package in your project to store package locally
```bash
mkdir -p ./packages/jhome-wu
git clone git@github.com:JhomeWu/laravel-error-collector.git ./packages/jhome-wu/laravel-error-collector
```
Set composer to get package locally
```
composer config repositories.laravel-error-collector '{"type": "path", "url": "./packages/jhome-wu/laravel-error-collector"}' --file composer.json
composer require jhome-wu/laravel-error-collector
php artisan migrate
```

## Format

```bash
composer format
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.
