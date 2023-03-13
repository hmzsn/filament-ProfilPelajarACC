<?php

namespace App\Filament\Resources\FunctionsResource\Pages;

use App\Filament\Resources\FunctionsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFunctions extends ListRecords
{
    protected static string $resource = FunctionsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
