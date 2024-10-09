<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MenuManagerResource\Pages;
use App\Filament\Resources\MenuManagerResource\RelationManagers;
use App\Models\MenuManager;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MenuManagerResource extends Resource
{
    protected static ?string $model = MenuManager::class;

    protected static ?string $navigationIcon = 'heroicon-o-adjustments-horizontal';

    protected static ?string $navigationGroup = 'Content Management';

    protected static ?string $navigationLabel = 'Menu Manager';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMenuManagers::route('/'),
            'create' => Pages\CreateMenuManager::route('/create'),
            'view' => Pages\ViewMenuManager::route('/{record}'),
            'edit' => Pages\EditMenuManager::route('/{record}/edit'),
        ];
    }
}
