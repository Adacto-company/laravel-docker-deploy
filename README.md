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

## Credits

- [Daniele Sesoldi](https://github.com/WorldSeso7)

## License

The Apache 2.0 License. Please see [License File](LICENSE.md) for more information.
