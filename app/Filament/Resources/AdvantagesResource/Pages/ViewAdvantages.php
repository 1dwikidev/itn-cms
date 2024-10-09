<?php

namespace App\Filament\Resources\AdvantagesResource\Pages;

use App\Filament\Resources\AdvantagesResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewAdvantages extends ViewRecord
{
    protected static string $resource = AdvantagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
