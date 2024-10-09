<?php

namespace App\Filament\Resources\DownloadManagerResource\Pages;

use App\Filament\Resources\DownloadManagerResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewDownloadManager extends ViewRecord
{
    protected static string $resource = DownloadManagerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
