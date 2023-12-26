<?php

namespace App\Filament\Pages;

use Filament\Actions\Action;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Log;

class Contact extends Page implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.contact';

    protected static ?string $title = 'Контакты';

    public function mount()
    {
        $this->form->fill(\App\Models\Contact::query()->firstOrNew()->attributesToArray());
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        TextInput::make('address')
                            ->label('Адрес'),
                        TextInput::make('email')
                            ->label('Почта'),
                        TextInput::make('phone')
                            ->label('Номер телефона'),
                        TextInput::make('whatsapp')
                            ->label('Ватсап'),
                        TextInput::make('telegram')
                            ->label('Телеграм'),
                        TextInput::make('vk')
                            ->label('Вконтакте')
                    ])
            ])
            ->model(\App\Models\Contact::query()->firstOrNew())
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
