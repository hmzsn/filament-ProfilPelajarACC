<?php

namespace App\Filament\Resources\FunctionsResource\Pages;

use App\Filament\Resources\FunctionsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFunctions extends EditRecord
{
    protected static string $resource = FunctionsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
