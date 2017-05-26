# Laravel Development Pack

A handy collection of resources and packages to use when developing a Laravel application that won't be registered in your production environment.

## Installation

First, include the package in your project with the `--dev` flag

```bash
composer require --dev corazzi/laravel-development-pack
```

Then register the package service provider for your non-production environments:

```php
// AppServiceProvider.php

public function register()
{
    if ($this->app->environment() !== 'production') {
        $this->app->register(Corazzi\LaravelDevelopmentPack\ServiceProvider::class);
    }
}
```

### Per-package configuration
Most included packages are just plug-and-play. That is, you don't need to perform any extra
steps to start using them in your dev environment.

Some packages, however, may require you to put code in other places in your application
that could or will cause issues in an environment where the packages are not
included (production, for example).

See the [package configuration documentation](PACKAGE-CONFIGURATION.md) for more details.

### Cherry-picking packages
By default, all included packages are enabled.

You can choose which packages are enabled or disabled by publishing the configuration file.

Publish the config file by running:
```bash
php artisan vendor:publish --provider="Corazzi\LaravelDevelopmentPack\ServiceProvider"
```

Then, in `config/dev-pack.php`, change the value of each package you do not want to include to `false`.

Please note that even if you disable a package from being activated in your app, it will still be 
included in your composer dependencies and, therefore, your `vendor` folder.

### Included packages:

* [barryvdh/laravel-debugbar](https://github.com/barryvdh/laravel-debugbar)
* [barryvdh/laravel-ide-helper](https://github.com/barryvdh/laravel-ide-helper)
* [filp/whoops](https://github.com/filp/whoops)
* [laracademy/interactive-make](https://github.com/laracademy/interactive-make)
* [laravel/tinker](https://github.com/laravel/tinker)
* [rap2hpoutre/laravel-log-viewer](https://github.com/rap2hpoutre/laravel-log-viewer)
* [themsaid/laravel-mail-preview](https://github.com/themsaid/laravel-mail-preview)

### Issues
Please use the issue tracker for issues related to this package. 
Please *do not* create issues caused by or affecting the included packages,
unless it's an integration issue that can be fixed in this package.

### Security Issues
Please report all security issues directly to sacha.corazzi@gmail.com.

Do not use the issue tracker.