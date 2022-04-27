<?php

namespace io3x1\FilamentUser\Resources\UserResource\Pages;

use App\Models\User;
use io3x1\FilamentUser\Resources\UserResource;
use Filament\Resources\Pages\EditRecord;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $getUser = User::where('email', $data['email'])->first();
        if ($getUser) {
            if (empty($data['password'])) {
                $data['password'] = $getUser->password;
            }
        }
        return $data;
    }

    protected function getTitle(): string
    {
        return trans('filament-user::user.resource.title.edit');
    }
}
