<?php

namespace io3x1\FilamentUser;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;


class FilamentUserProvider extends PluginServiceProvider
{
    public static string $name = 'filament-user';

    public function configurePackage(Package $package): void
    {
        $package->name('filament-user');
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../publish' => app_path(),
        ], 'filament-user');
    }
}
