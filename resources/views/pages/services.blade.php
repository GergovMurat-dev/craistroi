@php use App\Models\Service; @endphp
@extends('template')

@section('title')
    Услуги
@endsection

@php

@endphp

@section('content')
    <div style="background-image: url('{{ asset('/assets/img/background.png') }}')" class="page-heading">
        <div class="container">
            <div class="page-heading__container">
                <p class="page-heading__title">Услуги</p>
                <p class="page-heading__description">Реконструкция этого огромного по своим масштабам здания превратила
                    его в новый современный торгово-развлекательный центр.</p>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="section__services">
                <div class="section__services-cards">
                    @foreach($services as $services)
                        <a href="{{ route('single-service', $services->id) }}">
                            <div class="service-card">
                                <div class="service-card__image-container">
                                    <img src="/storage/{{ $services->card_image }}" alt="">
                                </div>
                                <p class="service-card__title">{{ $services->title }}</p>
                                <p class="service-card__description">{{ $services->card_description }}</p>
                            </div>
                        </a>
                    @endforeach
                </div>
                @if ($show)
                    <a href="{{ route('all-services') }}" style="margin: 0 auto" class="primary-btn">
                        Загрузить ещё
                    </a>
                @endif
            </div>
        </div>
    </section>
    <div class="advantages">
        <div class="container">
            <div class="advantages__container">
                <p class="main-title">НАШИ ПРЕИМУЩЕСТВА</p>
                <div class="advantages__wrapper">
                    <p>В нашем портфолио больше тысячи реализованных проектов. Мы поможем Вам реализовать идею, при этом
                        учтем все требования и пожелания. Вы доверите проект компетентным специалистам.</p>
                    <div class="advantages__card">
                        <div class="advantages__card__icon-container">
                            <img src="{{ asset('/assets/img/advantages.svg') }}" alt="">
                        </div>
                        <p class="advantages__card__title">Безопасность</p>
                    </div>
                    <div class="advantages__card">
                        <div class="advantages__card__icon-container">
                            <img src="{{ asset('/assets/img/advantages.svg') }}" alt="">
                        </div>
                        <p class="advantages__card__title">Качество работы</p>
                    </div>
                    <div class="advantages__card">
                        <div class="advantages__card__icon-container">
                            <img src="{{ asset('/assets/img/advantages.svg') }}" alt="">
                        </div>
                        <p class="advantages__card__title">Доверие</p>
                    </div>
                    <div class="advantages__card">
                        <div class="advantages__card__icon-container">
                            <img src="{{ asset('/assets/img/advantages.svg') }}" alt="">
                        </div>
                        <p class="advantages__card__title">Широкий спектр услуг</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
