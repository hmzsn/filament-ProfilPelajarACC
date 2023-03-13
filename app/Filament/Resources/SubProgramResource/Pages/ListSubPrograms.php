<?php

namespace App\Filament\Resources\SubProgramResource\Pages;

use App\Filament\Resources\SubProgramResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSubPrograms extends ListRecords
{
    protected static string $resource = SubProgramResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
