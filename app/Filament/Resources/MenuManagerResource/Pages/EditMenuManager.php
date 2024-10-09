<?php

namespace App\Filament\Resources\MenuManagerResource\Pages;

use App\Filament\Resources\MenuManagerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMenuManager extends EditRecord
{
    protected static string $resource = MenuManagerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
