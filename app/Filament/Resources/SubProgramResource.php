<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubProgramResource\Pages;
use App\Filament\Resources\SubProgramResource\RelationManagers;
use App\Models\SubProgram;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SubProgramResource extends Resource
{
    protected static ?string $model = SubProgram::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationLabel = 'Senarai Sub Program';
    protected static ?string $navigationGroup = 'Program';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSubPrograms::route('/'),
            'create' => Pages\CreateSubProgram::route('/create'),
            'edit' => Pages\EditSubProgram::route('/{record}/edit'),
        ];
    }    
}
