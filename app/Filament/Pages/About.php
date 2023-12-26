<?php

namespace App\Filament\Pages;

use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Forms\Form;
use Illuminate\Support\Facades\Log;

class About extends Page implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.about';

    protected static ?string $title = 'О компании';

    public function mount()
    {
        $this->form->fill(\App\Models\About::query()->firstOrNew()->attributesToArray());
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Описание страницы')
                    ->schema([
                        TextInput::make('page_description')
                            ->label('Описание страницы'),
                    ]),
                Section::make('Блок')
                    ->schema([
                        Grid::make()
                            ->schema([
                                TextInput::make('big_block_title')
                                    ->label('Заголовок блока'),
                                Textarea::make('big_block_description')
                                    ->label('Описание блока'),
                            ])
                            ->columns(1)
                            ->columnSpan(1),
                        Grid::make()
                            ->schema([
                                FileUpload::make('big_block_image')
                                    ->label('Изображение')
                            ])
                            ->columns(1)
                            ->columnSpan(1)
                    ])
                    ->columns(2),
                Section::make('Персональная информация')
                    ->schema([
                        Grid::make()
                            ->schema([
                                FileUpload::make('about_image')
                                    ->label('Изображение')
                            ])
                            ->columns(1)
                            ->columnSpan(1),
                        Grid::make()
                            ->schema([
                                TextInput::make('about_title')
                                    ->label('ФИО'),
                                TextInput::make('about_subtitle')
                                    ->label('Должность'),
                                Textarea::make('about_description')
                                    ->label('Описание блока')
                            ])
                            ->columns(1)
                            ->columnSpan(1)
                    ])->columns(2)
            ])
            ->model(\App\Models\About::query()->firstOrNew())
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
