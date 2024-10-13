# Huma

A user-friendly HRM platform designed to `empower` human resources, `streamline` employee management, and `foster` a positive workplace `culture`.

## Install via composer

Run the following command to pull in the latest version:

```bash
composer require jobmetric/huma
```

### Publish the config
Copy the `config` file from `vendor/jobmetric/huma/config/config.php` to `config` folder of your Laravel application and rename it to `huma.php`

Run the following command to publish the package config file:

```bash
php artisan vendor:publish --provider="JobMetric\Huma\HumaServiceProvider" --tag="huma-config"
```

You should now have a `config/huma.php` file that allows you to configure the basics of this package.

## Documentation

coming soon...
