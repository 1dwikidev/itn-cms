<?php

namespace App\Filament\Resources\SubscribeRequestResource\Pages;

use App\Filament\Resources\SubscribeRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSubscribeRequests extends ListRecords
{
    protected static string $resource = SubscribeRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
