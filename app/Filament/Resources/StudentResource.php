<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudentResource\Pages;
use App\Filament\Resources\StudentResource\RelationManagers;
use App\Models\Student;
use App\Models\State;
use App\Models\City;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StudentResource extends Resource
{
    protected static ?string $model = Student::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $navigationLabel = 'Senarai Pelajar';
    protected static ?string $navigationGroup = 'Pelajar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                ->schema([                     
                    Select::make('state_id')
                        ->label('State')
                        ->options(State::all()->pluck('name','id')->toArray())
                        ->reactive()
                        ->afterStateUpdated(fn (callable $set) => $set('city_id',null)),
                    Select::make('city_id')
                        ->label('City')
                        ->options(function (callable $get){
                            $state = State:: find($get('state_id'));
                            if(!$state){
                                return City::all()->pluck('name','id');
                            }
                            return $state->cities->pluck('name','id');
                    })
                    ->reactive(),                   
                    
                    TextInput::make('city_code')->required(),
                    TextInput::make('name')->required() 
                ]),
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
            'index' => Pages\ListStudents::route('/'),
            'create' => Pages\CreateStudent::route('/create'),
            'edit' => Pages\EditStudent::route('/{record}/edit'),
        ];
    }    
}
