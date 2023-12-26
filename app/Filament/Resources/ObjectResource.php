<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ObjectResource\Pages;
use App\Filament\Resources\ObjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ObjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $label = 'Проекты';

    protected static ?string $pluralLabel = 'Проекты';

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
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\Textarea::make('description')
                            ->label('Описание'),
                        Forms\Components\Group::make()
                            ->schema([
                                Forms\Components\FileUpload::make('before')
                                    ->label('До')
                                    ->multiple(),
                                Forms\Components\FileUpload::make('after')
                                    ->label('После')
                                    ->multiple()
                            ])->columns(2)
                    ])
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
                    ->label('Заголовок')
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
            'index' => Pages\ListObjects::route('/'),
            'create' => Pages\CreateObject::route('/create'),
            'edit' => Pages\EditObject::route('/{record}/edit'),
        ];
    }
}
