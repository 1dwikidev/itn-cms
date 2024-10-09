<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DownloadManagerResource\Pages;
use App\Models\DownloadManagers;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;


class DownloadManagerResource extends Resource
{
    protected static ?string $model = DownloadManagers::class;

    protected static ?string $navigationIcon = 'heroicon-o-cloud-arrow-down';

    protected static ?string $navigationGroup = 'Content Management';

    protected static ?string $navigationLabel = 'Download Manager';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                ->schema([
                    Textarea::make('description')
                    ->rows(5)
                    ->cols(10)
                    ->minLength(5),
                    FileUpload::make('file')
                    ->Label('File'),
                    // TextInput::make('file_type'),
                    // // ->hidden(),
                    // TextInput::make('size'),
                    // // ->hidden(),

                    // TextInput::make('number_of_downloads'),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('description')
                ->Label('Description'),
                TextColumn::make('file_type')
                ->label('File Type'),
                TextColumn::make('size')
                ->label('Size'),
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
            'index' => Pages\ListDownloadManagers::route('/'),
            'create' => Pages\CreateDownloadManager::route('/create'),
            'view' => Pages\ViewDownloadManager::route('/{record}'),
            'edit' => Pages\EditDownloadManager::route('/{record}/edit'),
        ];
    }
}
