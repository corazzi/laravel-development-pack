<?php

namespace Corazzi\LaravelDevelopmentPack\Providers;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * The service providers for the included development packages
     *
     * @var array
     */
    private $packageProviders = [
        Barryvdh\Debugbar\ServiceProvider::class,
        Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class,
        Laracademy\Commands\MakeServiceProvider::class,
        Laravel\Tinker\TinkerServiceProvider::class,
        Rap2hpoutre\LaravelLogViewer\LaravelLogViewerServiceProvider::class,
        Themsaid\MailPreview\MailPreviewServiceProvider::class,
    ];

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->packageProviders as $provider) {
            $this->app->register($provider);
        }
    }
}
