<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LevelResource\Pages;
use App\Filament\Resources\LevelResource\RelationManagers;
use App\Models\Level;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LevelResource extends Resource
{
    protected static ?string $model = Level::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('name') ->required() 
                ->placeholder('Select a level name ')
                ->options([
                    'level1' => 'Level 1',
                    'level2' => 'Level 2',
                    'level3' => 'Level 3',
                    'level4' => 'Level 4',
                    'level5' => 'Level 5',
                    'level6' => 'Level 6',
                ]),
                Forms\Components\Select::make('title') ->required() 
                ->placeholder('Select a level title ')
                ->options([
                    'A1' => 'A1',
                    'A2' => 'A2',
                    'B1' => 'B1',
                    'B2' => 'B2',
                    'C1' => 'C1',
                    'C2' => 'C2',
                ]),
            Forms\Components\FileUpload::make('cover')->image(),
            Forms\Components\BelongsToSelect::make('course_id')
            ->placeholder('Select a course ')
            ->relationship('course', 'name'), 
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            Tables\Columns\TextColumn::make('name'),
            Tables\Columns\TextColumn::make('title'),
            Tables\Columns\ImageColumn::make('cover'),
            Tables\Columns\TextColumn::make('course.name'),
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
            'index' => Pages\ListLevels::route('/'),
            'create' => Pages\CreateLevel::route('/create'),
            'edit' => Pages\EditLevel::route('/{record}/edit'),
          
        ];
    }    
}
