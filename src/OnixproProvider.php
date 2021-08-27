<?php

namespace Mariojgt\Onixpro;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Mariojgt\Onixpro\Commands\Install;
use Mariojgt\Onixpro\Commands\Republish;
use Mariojgt\Onixpro\Events\UserVerifyEvent;
use Mariojgt\Onixpro\Listeners\SendUserVerifyListener;

class OnixproProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Event for when you create a new user
        Event::listen(
            UserVerifyEvent::class,
            [SendUserVerifyListener::class, 'handle']
        );

        // Load some commands
        if ($this->app->runningInConsole()) {
            $this->commands([
                Republish::class,
                Install::class,
            ]);
        }

        // Loading Custom middlewhere
        $this->app['router']->aliasMiddleware(
            'boot_token', \Mariojgt\Onixpro\Middleware\BootTokenApi::class
        );

        // Load onixpro views
        $this->loadViewsFrom(__DIR__.'/views', 'onixpro');

        // Load onixpro routes
        $this->loadRoutesFrom(__DIR__.'/Routes/web.php');
        $this->loadRoutesFrom(__DIR__.'/Routes/auth.php');

        // Load Migrations
        $this->loadMigrationsFrom(__DIR__.'/Database/Migrations');
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
            __DIR__.'/../Publish/Npm/' => base_path(),
        ]);

        // Publish the resource
        $this->publishes([
            __DIR__.'/../Publish/Resource/Onixpro' => resource_path('vendor/Onixpro/'),
        ]);

        $this->publishes([
            __DIR__.'/../Publish/Resource/Onix' => resource_path('vendor/Onix/'),
        ]);


        // Publish the public folder with the css and javascript pre compile
        $this->publishes([
            __DIR__.'/../Publish/Public/Onixpro' => public_path('vendor/Onixpro/'),
        ]);

        $this->publishes([
            __DIR__.'/../Publish/Public/Onix' => public_path('vendor/Onix/'),
        ]);


        // Publish the public folder
        $this->publishes([
            __DIR__.'/../Publish/Config/' => config_path(''),
        ]);
    }
}
