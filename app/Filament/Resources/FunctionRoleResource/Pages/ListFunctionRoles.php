<?php

namespace App\Filament\Resources\FunctionRoleResource\Pages;

use App\Filament\Resources\FunctionRoleResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFunctionRoles extends ListRecords
{
    protected static string $resource = FunctionRoleResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
