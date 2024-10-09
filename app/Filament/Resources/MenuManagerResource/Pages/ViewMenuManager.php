<?php

namespace App\Filament\Resources\MenuManagerResource\Pages;

use App\Filament\Resources\MenuManagerResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewMenuManager extends ViewRecord
{
    protected static string $resource = MenuManagerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
