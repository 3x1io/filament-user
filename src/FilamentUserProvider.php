<?php

namespace io3x1\FilamentUser;

use Filament\PluginServiceProvider;
use io3x1\FilamentUser\Console\PublishUserResourceCommand;
use io3x1\FilamentUser\Resources\UserResource;
use Spatie\LaravelPackageTools\Package;


class FilamentUserProvider extends PluginServiceProvider
{
    /**
     * @var string
     */
    public static string $name = 'filament-user';

    /**
     * @param $app
     */
    public function __construct($app)
    {
        parent::__construct($app);

        //Check if customer publish the resource convert it to self register resource
        if(!config('filament-user.publish_resource')) {
            $this->resources = [
                UserResource::class,
            ];
        }
    }

    /**
     * @param Package $package
     * @return void
     */
    public function configurePackage(Package $package): void
    {
        $package->name('filament-user');
    }

    /**
     * @return void
     */
    public function boot(): void
    {
        parent::boot();

        //Register Publish Command
        if ($this->app->runningInConsole()) {
            $this->commands([
                PublishUserResourceCommand::class,
            ]);
        }

        //Load Translations
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'filament-user');

        //Publish Config
        $this->publishes([
            __DIR__ . '/../config' => config_path(),
        ], 'filament-user-config');

        //Publish Translations
        $this->publishes([
            __DIR__ . '/../resources/lang' => resource_path('lang/vendor/filament-user'),
        ], 'filament-user-translations');
    }
}
