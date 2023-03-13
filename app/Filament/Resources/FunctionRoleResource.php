<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FunctionRoleResource\Pages;
use App\Filament\Resources\FunctionRoleResource\RelationManagers;
use App\Models\FunctionRole;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FunctionRoleResource extends Resource
{
    protected static ?string $model = FunctionRole::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationLabel = 'Ketetapan Fungsi Peranan';
    protected static ?string $navigationGroup = 'Admin';
    protected static ?int $navigationSort = 4;

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
            'index' => Pages\ListFunctionRoles::route('/'),
            'create' => Pages\CreateFunctionRole::route('/create'),
            'edit' => Pages\EditFunctionRole::route('/{record}/edit'),
        ];
    }    
}
