<?php

namespace App\Filament\Resources\PartnersResource\Pages;

use App\Filament\Resources\PartnersResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPartners extends EditRecord
{
    protected static string $resource = PartnersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
