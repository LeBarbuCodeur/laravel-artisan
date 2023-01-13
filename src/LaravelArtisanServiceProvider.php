<?php

namespace LeBarbuCodeur\LaravelArtisan;

use Illuminate\Support\ServiceProvider;

class LaravelArtisanServiceProvider extends ServiceProvider
{
    public string $namespace = 'laravel-artisan';

    public function boot()
    {
        $this->registerRoutesPath();
        $this->registerTranslationsPath();
        $this->registerViewsPath();

        $this->publishes([
            sprintf('%s/lang', __DIR__) => $this->app->langPath(
                sprintf('vendor/%s', $this->namespace),
            ),
        ]);
    }

    public function register()
    {
        $this->registerRoutesPath();
        $this->registerTranslationsPath();
        $this->registerViewsPath();

        $this->app->bind('laravel-artisan', fn () => new LaravelArtisan());
    }

    protected function registerRoutesPath(): void
    {
        $this->loadRoutesFrom(sprintf('%s/LaravelArtisanRoutes.php', __DIR__), $this->namespace);
    }

    protected function registerTranslationsPath(): void
    {
        $this->loadTranslationsFrom(sprintf('%s/lang', __DIR__), $this->namespace);
    }

    protected function registerViewsPath(): void
    {
        $this->loadViewsFrom(sprintf('%s/views', __DIR__), $this->namespace);
    }
}