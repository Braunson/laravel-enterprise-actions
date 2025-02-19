# An enterprise grade actions package for Laravel with audit support.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/geekybeaver/laravel-enterprise-actions.svg?style=flat-square)](https://packagist.org/packages/geekybeaver/laravel-enterprise-actions)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/geekybeaver/laravel-enterprise-actions/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/geekybeaver/laravel-enterprise-actions/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/geekybeaver/laravel-enterprise-actions/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/geekybeaver/laravel-enterprise-actions/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/geekybeaver/laravel-enterprise-actions.svg?style=flat-square)](https://packagist.org/packages/geekybeaver/laravel-enterprise-actions)

## Installation

You can install the package via composer:

```bash
composer require geekybeaver/laravel-enterprise-actions
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-enterprise-actions-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-enterprise-actions-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-enterprise-actions-views"
```

## Usage

```php
$laravelEnterpriseActions = new Geekybeaver\LaravelEnterpriseActions();
echo $laravelEnterpriseActions->echoPhrase('Hello, Geekybeaver!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Braunson Yager](https://github.com/Braunson)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
