<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdvantagesResource\Pages;
use App\Filament\Resources\AdvantagesResource\RelationManagers;
use App\Models\Advantages;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AdvantagesResource extends Resource
{
    protected static ?string $model = Advantages::class;

    protected static ?string $navigationIcon = 'heroicon-o-check-circle';

    protected static ?string $navigationGroup = 'Profile Management';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        TextInput::make('title')
                            ->label('Title'),
                        RichEditor::make('content')
                            ->label('Content'),
                        FileUpload::make('images')
                            ->label('Images'),
                    ])
                    ->columnSpan(2),

                Section::make('Visibillity')
                    ->schema([
                        Toggle::make('visibillity')
                            ->label('')
                            ->onIcon('heroicon-o-eye')
                            ->offIcon('heroicon-o-eye-slash')
                            ->onColor('success')
                            ->offColor('danger')
                            ->inline(false)
                    ])->columnSpan(1),
            ])
            ->columns(3);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Title')
                    ->width(200),
                ImageColumn::make('images')
                    ->label('Images')
                    ->size(150),
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
            'index' => Pages\ListAdvantages::route('/'),
            'create' => Pages\CreateAdvantages::route('/create'),
            'view' => Pages\ViewAdvantages::route('/{record}'),
            'edit' => Pages\EditAdvantages::route('/{record}/edit'),
        ];
    }
}
