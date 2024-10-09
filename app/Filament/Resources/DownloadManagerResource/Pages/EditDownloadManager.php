<?php

namespace App\Filament\Resources\DownloadManagerResource\Pages;

use App\Filament\Resources\DownloadManagerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDownloadManager extends EditRecord
{
    protected static string $resource = DownloadManagerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
