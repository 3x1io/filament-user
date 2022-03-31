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
}
