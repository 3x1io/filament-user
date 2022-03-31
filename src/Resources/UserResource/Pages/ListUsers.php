<?php

namespace io3x1\FilamentUser\Resources\UserResource\Pages;

use Maatwebsite\Excel\Facades\Excel;
use io3x1\FilamentUser\Resources\UserResource;
use Filament\Pages\Actions\ButtonAction;
use Filament\Resources\Pages\ListRecords;
use io3x1\FilamentUser\Export\UsersExport;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected function getActions(): array
    {
        return array_merge(parent::getActions(), [
            ButtonAction::make('export')->action('export'),
        ]);
    }

    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}
