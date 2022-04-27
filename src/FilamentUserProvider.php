<?php

namespace io3x1\FilamentUser;

use Filament\PluginServiceProvider;
use io3x1\FilamentUser\Resources\UserResource;
use Spatie\LaravelPackageTools\Package;


class FilamentUserProvider extends PluginServiceProvider
{
    public static string $name = 'filament-user';

    protected array $resources = [
        UserResource::class,
    ];

    public function configurePackage(Package $package): void
    {
        $package->name('filament-user');
    }

    public function boot(): void
    {
        parent::boot();

        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'filament-user');

        $this->publishes([
            __DIR__ . '/../config' => config_path(),
        ], 'filament-user-config');

        $this->publishes([
            __DIR__ . '/../resources/lang' => resource_path('lang/vendor/filament-user'),
        ], 'filament-user-translations');
    }
}
