<?php

namespace io3x1\FilamentUser\Resources\UserResource\Pages;

use io3x1\FilamentUser\Resources\UserResource;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    protected function getTitle(): string
    {
        return trans('filament-user::user.resource.title.create');
    }
}
