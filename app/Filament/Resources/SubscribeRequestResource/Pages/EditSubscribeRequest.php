<?php

namespace App\Filament\Resources\SubscribeRequestResource\Pages;

use App\Filament\Resources\SubscribeRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSubscribeRequest extends EditRecord
{
    protected static string $resource = SubscribeRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
