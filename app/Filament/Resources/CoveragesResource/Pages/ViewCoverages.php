<?php

namespace App\Filament\Resources\CoveragesResource\Pages;

use App\Filament\Resources\CoveragesResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCoverages extends ViewRecord
{
    protected static string $resource = CoveragesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
