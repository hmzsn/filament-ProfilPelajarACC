<?php

namespace App\Filament\Resources\SubProgramResource\Pages;

use App\Filament\Resources\SubProgramResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSubProgram extends EditRecord
{
    protected static string $resource = SubProgramResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
