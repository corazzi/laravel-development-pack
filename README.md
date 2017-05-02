# Laravel Development Pack

A handy collection of resources and packages to use when developing a Laravel application that won't be registered in your production environment.

## Installation

First, include the package in your project with the `--dev` flag

```bash
composer require --dev corazzi/laravel-development-pack
```

Then register the package service provider for your non-production environments:

```php
public function register()
{
    if ($this->app->environment() !== 'production') {
        $this->app->register(Corazzi\LaravelDevelopmentPack\ServiceProvider::class);
    }
}
```

### Included packages:

* [barryvdh/laravel-debugbar](https://github.com/barryvdh/laravel-debugbar)
* [barryvdh/laravel-ide-helper](https://github.com/barryvdh/laravel-ide-helper)
* [filp/whoops](https://github.com/filp/whoops)
* [laracademy/interactive-make](https://github.com/laracademy/interactive-make)
* [laravel/tinker](https://github.com/laravel/tinker)
* [rap2hpoutre/laravel-log-viewer](https://github.com/rap2hpoutre/laravel-log-viewer)
* [spatie/laravel-migrate-fresh](https://github.com/spatie/laravel-migrate-fresh)
* [themsaid/laravel-mail-preview](https://github.com/themsaid/laravel-mail-preview)
