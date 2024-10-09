<?php

namespace App\Filament\Resources\LayoutsResource\Pages;

use App\Filament\Resources\LayoutsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLayouts extends EditRecord
{
    protected static string $resource = LayoutsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
