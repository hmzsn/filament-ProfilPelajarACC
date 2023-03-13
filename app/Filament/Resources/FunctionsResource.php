<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FunctionsResource\Pages;
use App\Filament\Resources\FunctionsResource\RelationManagers;
use App\Models\Functions;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FunctionsResource extends Resource
{
    protected static ?string $model = Functions::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationLabel = 'Senarai Fungsi';
    protected static ?string $navigationGroup = 'Admin';
    protected static ?int $navigationSort = 3;

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
            'index' => Pages\ListFunctions::route('/'),
            'create' => Pages\CreateFunctions::route('/create'),
            'edit' => Pages\EditFunctions::route('/{record}/edit'),
        ];
    }    
}
