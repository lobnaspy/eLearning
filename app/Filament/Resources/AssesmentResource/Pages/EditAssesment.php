<?php

namespace App\Filament\Resources\AssesmentResource\Pages;

use App\Filament\Resources\AssesmentResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAssesment extends EditRecord
{
    protected static string $resource = AssesmentResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
