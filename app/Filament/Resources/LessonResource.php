<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LessonResource\Pages;
use App\Filament\Resources\LessonResource\RelationManagers;
use App\Models\Lesson;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LessonResource extends Resource
{
    protected static ?string $model = Lesson::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Forms\Components\TextInput::make('name')->required(),
            Forms\Components\TextInput::make('title')->required(),
            Forms\Components\FileUpload::make('dictionary')->image()->label('Pictural Dictionary'),
            Forms\Components\BelongsToSelect::make('unit_id')
            ->placeholder('Select a unit ')
            ->relationship('unit', 'name'),
            Forms\Components\Textarea::make('outcomes')->cols(100) ->rows(10),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            Tables\Columns\TextColumn::make('name'),
            Tables\Columns\TextColumn::make('title'),
            Tables\Columns\TextColumn::make('outcomes'),
            Tables\Columns\ImageColumn::make('dictionary'),
            Tables\Columns\TextColumn::make('unit.name'),
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
            'index' => Pages\ListLessons::route('/'),
            'create' => Pages\CreateLesson::route('/create'),
            'edit' => Pages\EditLesson::route('/{record}/edit'),
          
        ];
    }    
}
