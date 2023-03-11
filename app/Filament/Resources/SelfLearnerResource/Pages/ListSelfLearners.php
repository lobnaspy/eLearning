<?php

namespace App\Filament\Resources\SelfLearnerResource\Pages;

use App\Filament\Resources\SelfLearnerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSelfLearners extends ListRecords
{
    protected static string $resource = SelfLearnerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
