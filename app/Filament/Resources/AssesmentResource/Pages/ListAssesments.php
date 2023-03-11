<?php

namespace App\Filament\Resources\AssesmentResource\Pages;

use App\Filament\Resources\AssesmentResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAssesments extends ListRecords
{
    protected static string $resource = AssesmentResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
