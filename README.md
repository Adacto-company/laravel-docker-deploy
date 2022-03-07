# Laravel Docker Deploy

[![Latest Version on Packagist](https://img.shields.io/packagist/v/adacto-company/laravel-docker-deploy.svg?style=flat-square)](https://packagist.org/packages/adacto-company/laravel-docker-deploy)
[![Total Downloads](https://img.shields.io/packagist/dt/adacto-company/laravel-docker-deploy.svg?style=flat-square)](https://packagist.org/packages/adacto/laravel-docker-deploy)

This repo contains all required files to deploy Laravel using a Docker Stack. 

## Installation

You can install the package via composer:

```bash
composer require adacto-company/laravel-docker-deploy
```

## Usage

You can install all the required files using this command:

```bash
php artisan docker-deploy:install
```

You can add a new environment using this command:

```bash
php artisan docker-deploy:generate-environment
```

For local development you can use Laravel Sail with the standard sail command.

For deployment environments you need to set the APP_ENV environment variable.

Tips: Don't forget to edit the generated .env.* files with your configuration data.

## Credits

- [Daniele Sesoldi](https://github.com/WorldSeso7)

## License

The Apache 2.0 License. Please see [License File](LICENSE.md) for more information.
