<?php

namespace App\Filament\Resources\SubscribeRequestResource\Pages;

use App\Filament\Resources\SubscribeRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSubscribeRequest extends ViewRecord
{
    protected static string $resource = SubscribeRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
