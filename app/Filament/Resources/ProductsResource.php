<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductsResource\Pages;
use App\Models\Products;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;


class ProductsResource extends Resource
{
   protected static ?string $model = Products::class;

   protected static ?string $navigationIcon = 'heroicon-o-cube';
   protected static ?string $navigationGroup = 'Product Management';
   protected static ?string $navigationLabel = 'Products';

   public static function form(Form $form): Form
   {
      return $form
         ->schema([
            Section::make([
               TextInput::make('name')
                  ->required()
                  ->maxLength(255),
               TextInput::make('type')
                  ->label('Product Type Name')
                  ->required(),
               TextInput::make('price')
                  ->label('Price')
                  ->required()
                  ->columnSpan(2),
               KeyValue::make('attributes')
                  ->required()
                  ->columnSpan(2),

            ])
               ->columns(2)
               ->columnSpan(2),

            Section::make([
               Select::make('productCategories')
                  ->label('Category')
                  ->multiple()
                  ->searchable()
                  ->relationship(titleAttribute: 'name')
            ])
               ->columns(1)
               ->columnSpan(1),

         ])
         ->columns(3);
   }

   public static function table(Table $table): Table
   {
      return $table
         ->columns([
            TextColumn::make('name')
               ->label('Name')
               ->searchable(),
            TextColumn::make('productCategories.name')
               ->label('Category')
               ->searchable(),
            TextColumn::make('type')
               ->label('Type')
               ->searchable(),
            TextColumn::make('price')
               ->label('Price')
               ->searchable(),
         ])
         ->filters([
            //
         ])
         ->actions([
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
         'index' => Pages\ListProducts::route('/'),
         'create' => Pages\CreateProducts::route('/create'),
         'edit' => Pages\EditProducts::route('/{record}/edit'),
      ];
   }
}
