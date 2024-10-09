<?php

namespace App\Filament\Resources\DownloadManagerResource\Pages;

use App\Filament\Resources\DownloadManagerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDownloadManagers extends ListRecords
{
    protected static string $resource = DownloadManagerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
