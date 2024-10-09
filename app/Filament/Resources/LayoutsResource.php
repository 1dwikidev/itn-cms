<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LayoutsResource\Pages;
use App\Filament\Resources\LayoutsResource\RelationManagers;
use App\Models\Layouts;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LayoutsResource extends Resource
{
    protected static ?string $model = Layouts::class;

    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';

    protected static ?string $navigationGroup = 'Settings & Configuration'; 

    protected static ?string $navigationLabel = 'Layouts'; 
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
            'index' => Pages\ListLayouts::route('/'),
            'create' => Pages\CreateLayouts::route('/create'),
            'view' => Pages\ViewLayouts::route('/{record}'),
            'edit' => Pages\EditLayouts::route('/{record}/edit'),
        ];
    }
}
