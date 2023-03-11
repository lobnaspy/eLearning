<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AssesmentResource\Pages;
use App\Filament\Resources\AssesmentResource\RelationManagers;
use App\Models\Assesment;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AssesmentResource extends Resource
{
    protected static ?string $model = Assesment::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

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
            'index' => Pages\ListAssesments::route('/'),
            'create' => Pages\CreateAssesment::route('/create'),
            'edit' => Pages\EditAssesment::route('/{record}/edit'),
        ];
    }    
}
