<?php

namespace Mariojgt\Onixpro;

use Illuminate\Support\ServiceProvider;
use Mariojgt\Onixpro\Commands\Install;
use Mariojgt\Onixpro\Commands\Republish;

class OnixproProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Load the install and the republish commands
        if ($this->app->runningInConsole()) {
            $this->commands([
                Republish::class,
                Install::class,
            ]);
        }

        // Load onixpro views
        $this->loadViewsFrom(__DIR__ . '/views', 'onixpro');

        // Load onixpro routes
        $this->loadRoutesFrom(__DIR__ . '/Routes/web.php');

        // Load Migrations
        $this->loadMigrationsFrom(__DIR__ . '/Database/Migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->publish();
    }

    public function publish()
    {
        // Publish the npm
        $this->publishes([
            __DIR__ . '/../Publish/Npm/' => base_path(),
        ]);

        // Publish the resource
        $this->publishes([
            __DIR__ . '/../Publish/Resource/Onixpro' => resource_path('vendor/Onixpro/'),
        ]);

        $this->publishes([
            __DIR__ . '/../Publish/Resource/Onix' => resource_path('vendor/Onix/'),
        ]);

        // Publish the public folder with the css and javascript pre compile
        $this->publishes([
            __DIR__ . '/../Publish/Public/Onixpro' => public_path('vendor/Onixpro/'),
        ]);

        $this->publishes([
            __DIR__ . '/../Publish/Public/Onix' => public_path('vendor/Onix/'),
        ]);


        // Publish the public folder
        $this->publishes([
            __DIR__ . '/../Publish/Config/' => config_path(''),
        ]);

        // Publish the auth scale folding for the views
        $this->publishes([
            __DIR__ . '/../Publish/components/' => resource_path('views/components'),
        ], 'onix-components');
    }
}
