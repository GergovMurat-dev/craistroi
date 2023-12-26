<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $label = 'Услуги';

    protected static ?string $pluralLabel = 'Услуги';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Карточка услуги')
                    ->schema([
                        Forms\Components\Group::make()
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->required()
                                    ->label('Заголовок'),
                                Forms\Components\Textarea::make('card_description')
                                    ->label('Содержание')
                                    ->required(),
                            ])->columnSpan(2),
                        Forms\Components\Group::make()
                            ->schema([
                                Forms\Components\FileUpload::make('card_image')
                                    ->label('Изображение')
                            ])
                    ])->columns(3)
                    ->columnSpanFull(),
                Forms\Components\Section::make('Описание услуги')
                    ->schema([
                        Forms\Components\Group::make()
                            ->schema([
                                Forms\Components\Textarea::make('description')
                                    ->label('Содержание')
                                    ->required(),
                            ])->columnSpan(2),
                        Forms\Components\Group::make()
                            ->schema([
                                Forms\Components\FileUpload::make('image')
                                    ->label('Изображение')
                            ])
                    ])->columns(3)
                    ->columnSpanFull(),
                Forms\Components\Section::make('Описание услуги')
                    ->schema([
                        Forms\Components\Repeater::make('services')
                            ->label('Услуги')
                            ->schema([
                                Forms\Components\Group::make()
                                    ->schema([
                                        Forms\Components\TextInput::make('title')
                                            ->required()
                                            ->label('Заголовок'),
                                        Forms\Components\Textarea::make('subtitle')
                                            ->label('Подзаголовок')
                                            ->required(),
                                    ])->columnSpan(2)
                                    ->columnSpanFull(),
                                Forms\Components\Group::make()
                                    ->schema([
                                        Forms\Components\FileUpload::make('image')
                                            ->label('Изображение')
                                            ->required()
                                    ])->columnSpan(3)
                                    ->columnSpanFull()
                            ])
                    ])->columns(1)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('card_image')
                    ->label('Изображение')
                    ->size(150),
                Tables\Columns\TextColumn::make('title')
                    ->label('Заголовок'),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
