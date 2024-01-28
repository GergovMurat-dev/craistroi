@extends('template')

@section('title')
    Заголовок услуги
@endsection

@section('content')
    <div style="background-image: url('{{ asset('/assets/img/background.png') }}')" class="page-heading">
        <div class="container">
            <div class="page-heading__container">
                <p class="page-heading__title">{{ $service->title }}</p>
                <p class="page-heading__description">УСЛУГИ</p>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="service__block">
                <p class="service__block-hide-text">{{ $service?->description }}</p>
                <div class="service__block__image-container">
                    <img src="/storage/{{ $service->image }}" alt="">
                </div>
                <div class="service__block__content">
                    <p>{{ $service?->description }}</p>
                    <button data-modal="big-form" class="primary-btn open-modal">
                        Заказать услугу
                    </button>
                </div>
                <button data-modal="big-form" class="primary-btn open-modal">
                    Заказать услугу
                </button>
            </div>
        </div>
    </section>
    @if (!empty($service->services))
        <section id="bigSliderContainer">
            <div class="container">
                <p class="main-title">СДАННЫЕ ОБЪЕКТЫ</p>
            </div>
            <div class="swiper" id="bigSlider">
                <div class="swiper-wrapper">
                    @foreach($service->services as $object)
                        <div class="swiper-slide">
                            @if (!empty($object['image']))
                                <div class="big-slider__image-container">
                                    <img src="/storage/{{ $object['image'] }}" alt="">
                                </div>
                            @endif
                            <div class="big-slider__content">
                                <p class="big-slider__content__title">{{ $object['title'] ?? '' }}</p>
                                <p class="big-slider__content__description">{{ $object['subtitle'] ?? '' }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-prev" id="bigSliderPrev"></div>
                <div class="swiper-button-next" id="bigSliderNext"></div>
            </div>
        </section>
    @endif
    @php
        $cards = \App\Models\Setting::query()->firstOrNew()->work_cards;
    @endphp
    @if (!empty($cards))
        <div class="advantages">
            <div class="container">
                <div class="advantages__container">
                    <p class="main-title">КАК МЫ РАБОТАЕМ</p>
                    <div class="advantages__wrapper">
                        @foreach($cards as $card)
                            <div class="advantages__card">
                                <div class="advantages__card__icon-container">
                                    <img src="{{ asset('/assets/img/advantages.svg') }}" alt="">
                                </div>
                                <div class="advantages__card__content">
                                    <p class="advantages__card__title">{{ $card['card_title'] }}</p>
                                    <p class="advantages__card__description">{{ $card['card_description'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
