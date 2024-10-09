<?php

namespace App\Filament\Resources\LayoutsResource\Pages;

use App\Filament\Resources\LayoutsResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewLayouts extends ViewRecord
{
    protected static string $resource = LayoutsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
