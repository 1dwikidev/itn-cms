<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductCategoriesResource\Pages;
use App\Models\ProductCategories;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProductCategoriesResource extends Resource
{
    protected static ?string $model = ProductCategories::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';

    protected static ?string $navigationGroup = 'Product Management';

    protected static ?string $navigationLabel = 'Categories';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    TextInput::make('name')
                        ->label('Name')
                        ->required(),
                    RichEditor::make('description')
                ])
                    ->columnSpan(2),
                Section::make([
                    Select::make('products')
                        ->label('Products')
                        ->multiple()
                        ->searchable()
                        ->relationship(titleAttribute: 'name')
                ])
                    ->columnSpan(1),
            ])
            ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // TextColumn::make('products.name')
                //     ->label('Product')
                //     ->searchable(),
                TextColumn::make('name')
                    ->label('Name'),
                TextColumn::make('description')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListProductCategories::route('/'),
            'create' => Pages\CreateProductCategories::route('/create'),
            'view' => Pages\ViewProductCategories::route('/{record}'),
            'edit' => Pages\EditProductCategories::route('/{record}/edit'),
        ];
    }
}
