<?php

namespace App\Filament\Pages;

use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class Main extends Page implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.main';

    protected static ?string $title = 'Главная';

    public function mount()
    {
        $this->form->fill(\App\Models\Main::query()->firstOrNew()->attributesToArray());
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Главный экран')
                    ->schema([
                        FileUpload::make('background_image')
                            ->label('Задний фон')
                            ->required()
                            ->image(),
                        FileUpload::make('background_image2')
                            ->label('Задний фон')
                            ->required()
                            ->image(),
                        FileUpload::make('background_image2')
                            ->label('Задний фон')
                            ->required()
                            ->image(),
                        FileUpload::make('background_image2')
                            ->label('Задний фон')
                            ->required()
                            ->image(),
                        Grid::make(2)
                            ->schema([
                                TextInput::make('main_title')
                                    ->label('Заголовок')
                                    ->required()
                                    ->string(),
                                Textarea::make('main_description')
                                    ->label('Описание')
                                    ->required()
                                    ->string()
                                    ->rows(4)
                            ]),
                    ]),
                Section::make('О нас')
                    ->schema([
                        Textarea::make('about_us.description')
                            ->label('Описание')
                            ->rows(10)
                            ->columnSpan(2),
                        FileUpload::make('about_us.image')
                            ->label('Изображение')
                            ->columnSpan(1)
                    ])
                    ->columns(3),
                Section::make('Партнёры')
                    ->schema([
                        Repeater::make('partners')
                            ->label('Партнёры')
                            ->hiddenLabel()
                            ->schema([
                                FileUpload::make('slide')
                                    ->hiddenLabel()
                                    ->image()
                            ])
                    ])->collapsible(),
                Section::make('Большой слайдер')
                    ->schema([
                        Repeater::make('big_slider')
                            ->label('большому слайдеру')
                            ->hiddenLabel()
                            ->schema([
                                FileUpload::make('slide')
                                    ->hiddenLabel()
                                    ->image()
                            ])->minItems(3)
                    ])->collapsible()
            ])
            ->model(\App\Models\Main::query()->firstOrNew())
            ->statePath('data');
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
                ->submit('save'),
        ];
    }

    public function save(): void
    {
        $model = $this->form->model;
        $this->form->validate();

        try {
            $data = $this->form->getState();
            $model->fill($data);
            $model->save();

            Notification::make()
                ->success()
                ->title(__('filament-panels::resources/pages/edit-record.notifications.saved.title'))
                ->send();
        } catch (\Throwable $exception) {
            Notification::make()
                ->success()
                ->title($exception->getMessage())
                ->send();
            Log::info($exception->getMessage());
        }
    }
}
