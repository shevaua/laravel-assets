<?php

namespace Shevaua\LaravelAssets\Provider;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

use Shevaua\LaravelAssets\Facade\AssetGroupFacade;

/**
 * Laravel Assets Provider
 */
class AssetProvider extends ServiceProvider
{

    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $path = realpath(__DIR__.'/../../config');
        $this->publishes([
            $path . '/assets.php' => config_path('assets.php'),
        ], 'laravel-assets');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        $path = realpath(__DIR__.'/../../views');
        $this->loadViewsFrom($path, 'shevaua/laravel-assets');
        Blade::directive('assets', function ($group) {
            return '<?= $__env->make(\'shevaua/laravel-assets::assetsgroup\', [\'assets\' => Assets::create(config(\'assets.'.$group.'\'))])->render() ?>';
        });
    }

}
