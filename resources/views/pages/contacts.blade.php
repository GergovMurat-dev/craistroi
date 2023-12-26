@php use App\Models\Contact; @endphp
@extends('template')

@section('title')
    Контакты
@endsection

@section('content')
    @php
        $contacts = Contact::query()->firstOrNew();
    @endphp
    <div style="background-image: url('{{ asset('/assets/img/background.png') }}')" class="page-heading">
        <div class="container">
            <div class="page-heading__container">
                <p class="page-heading__title">Контакты</p>
            </div>
        </div>
    </div>
    <section class="section__container">
        <div class="container">
            <div class="section__contacts">
                <div class="contacts__info">
                    @if ($contacts?->address ||
                         $contacts?->email ||
                         $contacts?->phone ||
                         $contacts?->whatsapp ||
                         $contacts?->telegram ||
                         $contacts?->vk )
                        @if ($contacts?->address)
                            <p class="contacts__title">Адрес</p>
                        @endif
                        <ul>
                            @if ($contacts?->address)
                                <li><p>{{ $contacts?->address }}</p></li>
                            @endif
                            @if ($contacts?->email)
                                <li><a href="mailto:{{ $contacts?->email }}">{{ $contacts?->email }}</a></li>
                            @endif
                            @if($contacts?->phone)
                                <li><a href="tel:{{ $contacts?->phone }}">{{ $contacts?->phone }}</a></li>
                            @endif
                        </ul>
                        <div class="contacts-socials">
                            @if ($contacts?->whatsapp)
                                <a href="{{ $contacts?->whatsapp }}">
                                    <div class="contacts-socials__icon">
                                        <img src="{{ asset('/assets/img/whatsapp-contacts.svg') }}" alt="">
                                    </div>
                                </a>
                            @endif
                            @if($contacts?->telegram)
                                <a href="{{ $contacts?->telegram }}">
                                    <div class="contacts-socials__icon">
                                        <img src="{{ asset('/assets/img/telegram.svg') }}" alt="">
                                    </div>
                                </a>
                            @endif
                            @if($contacts?->vk)
                                <a href="{{ $contacts?->vk }}">
                                    <div class="contacts-socials__icon">
                                        <img src="{{ asset('/assets/img/vk.svg') }}" alt="">
                                    </div>
                                </a>
                            @endif
                        </div>
                    @endif
                </div>
                <div class="contacts__map">
                    <iframe
                        src="https://yandex.ru/map-widget/v1/?um=constructor%3A8bac254d792f7a16cd082943ad875f59e5cf30b6d184c364fa66c46a67b49888&amp;source=constructor"
                        width="100%" height="100%" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
