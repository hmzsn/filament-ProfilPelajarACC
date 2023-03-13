<?php

namespace App\Filament\Resources\FunctionRoleResource\Pages;

use App\Filament\Resources\FunctionRoleResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFunctionRole extends EditRecord
{
    protected static string $resource = FunctionRoleResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
