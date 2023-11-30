<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use Filament\Actions\Action;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Log;

class Settings extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.settings';

    protected static ?string $title = 'Настройки';

    public ?array $data = [];

    public function mount()
    {
        $this->form->fill(Setting::query()->firstOrNew()->attributesToArray());
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Баннер проектов')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                Textarea::make('banner_description')
                                    ->label('Описание баннера')
                                    ->rows(9)
                                    ->required(),
                                Group::make()
                                    ->schema([
                                        TextInput::make('project_count')
                                            ->label('Воплощенных проектов')
                                            ->required(),
                                        TextInput::make('friendly_clients')
                                            ->label('Довольных клиентов')
                                            ->required(),
                                        TextInput::make('prizes')
                                            ->label('Отраслевых наград')
                                            ->required()
                                    ])
                            ])
                    ])->collapsed(true)
            ])->model(Setting::query()->firstOrNew())
            ->statePath('data');
    }


    public function getFormActions()
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
