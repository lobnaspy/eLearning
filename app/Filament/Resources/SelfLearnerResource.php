<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SelfLearnerResource\Pages;
use App\Filament\Resources\SelfLearnerResource\RelationManagers;
use App\Models\SelfLearner;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SelfLearnerResource extends Resource
{
    protected static ?string $model = SelfLearner::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('first_name') ->required(),
                Forms\Components\TextInput::make('last_name') ->required(),
                Forms\Components\TextInput::make('mobile') ->required(),
           
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            Tables\Columns\TextColumn::make('first_name'),
            Tables\Columns\TextColumn::make('last_name'),
            Tables\Columns\TextColumn::make('mobile'),
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
            'index' => Pages\ListSelfLearners::route('/'),
            'create' => Pages\CreateSelfLearner::route('/create'),
            'edit' => Pages\EditSelfLearner::route('/{record}/edit'),
        ];
    }    
}
