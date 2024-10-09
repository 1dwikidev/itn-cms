<?php

namespace App\Filament\Resources\LayoutsResource\Pages;

use App\Filament\Resources\LayoutsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLayouts extends ListRecords
{
    protected static string $resource = LayoutsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
