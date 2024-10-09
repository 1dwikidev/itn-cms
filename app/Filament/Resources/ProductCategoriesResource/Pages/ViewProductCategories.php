<?php

namespace App\Filament\Resources\ProductCategoriesResource\Pages;

use App\Filament\Resources\ProductCategoriesResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewProductCategories extends ViewRecord
{
    protected static string $resource = ProductCategoriesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
