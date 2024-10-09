<?php

namespace App\Filament\Resources\DownloadManagerResource\Pages;

use App\Filament\Resources\DownloadManagerResource;
use Filament\Resources\Pages\CreateRecord;


class CreateDownloadManager extends CreateRecord
{
    protected static string $resource = DownloadManagerResource::class;

    protected function beforeCreate(): void
    {
        $uploadedFile = $this->data['file'];
        
        $uploadedFilePath = reset($uploadedFile); // Get the first value in the array

        if ($uploadedFile) {
            $this->data['file_type'] = mime_content_type(storage_path('app/public/' . $uploadedFilePath)); // Full path to the file
            $this->data['size'] = (string) filesize(storage_path('app/public/' . $uploadedFilePath)); // File size in bytes
        }

    }
}
