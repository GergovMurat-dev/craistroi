@extends('template')

@section('title')
    Главная
@endsection

@section('content')
    @if ($phone)
        <a class="main__whatsapp" href="{{ $phone }}">
            <img src="{{ asset('/assets/img/header__whatsapp.png') }}" alt="">
        </a>
    @endif
    <main style="background-image: url('/storage/{{$main->background_image}}')">
        <div class="container">
            <div class="main__container">
                <p class="main__title">{{ $main?->main_title }}</p>
                <p class="main__description">{{ $main?->main_description }}</p>
                <button data-modal="big-form" class="primary-btn open-modal">
                    Получить консультацию
                </button>
            </div>
        </div>
    </main>
    @if($main?->about_us['description'] && $main?->about_us['image'])
        <section>
            <div class="section__about-us__image-container-hidden">
                <img src="/storage/{{ $main?->about_us['image'] }}" alt="">
            </div>
            <div class="container">
                <div class="section__about-us">
                    <div>
                        <p class="section__about-us__title main-title">О нас</p>
                        <p class="section__about-us__description">{{ $main?->about_us['description'] }}</p>
                        <a href="/about" class="primary-btn">
                            Узнать
                            больше
                        </a>
                    </div>
                    @if($main?->about_us['image'])
                        <div class="section__about-us__image-container">
                            <img src="/storage/{{ $main?->about_us['image'] }}" alt="">
                        </div>
                    @endif
                </div>
            </div>
        </section>
    @endif
    @include('components.projects-banner')
    <section>
        <div class="container">
            <div class="section__objects">
                <p class="main-title">Наши объекты</p>
                <div class="section__objects__wrapper">
                    @foreach($objects as $object)
                        <a href="{{ route('single-object', $object->id) }}" class="object__card-link">
                            <div class="object__card">
                                <div class="object__card-image">
                                    <div class="object__card-image__more">
                                        <p>Подробнее</p>
                                    </div>
                                    <img src="/storage/{{ $object?->card_image }}" alt="">
                                </div>
                                <p class="object__cart-title">
                                    {{ $object?->title }}
                                </p>
                                <p class="object__cart-description">
                                    {{ $object?->card_description }}
                                </p>
                            </div>
                        </a>
                    @endforeach
                </div>
                <a href="/objects" class="section__show-btn primary-btn">
                    Посмотреть ещё
                </a>
            </div>
        </div>
    </section>
    @if($main->partners)
        <div class="container">
            <p class="main-title partners-main-title">Партнёры</p>
        </div>
        <div class="partners">
            <div class="container">
                <section class="splide" id="partners" aria-label="Splide Basic HTML Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach($main->partners as $partner)
                                <li class="splide__slide">
                                    <div class="partner-slide">
                                        <img src="/storage/{{ $partner['slide'] }}" alt="">
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="partner-slide">
                                        <img src="/storage/{{ $partner['slide'] }}" alt="">
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    @endif
    @if (!empty($main->big_slider))
        <div>
            <div class="swiper" id="bigSlider">
                <div class="swiper-wrapper">
                    @foreach($main->big_slider as $slide)
                        <div class="swiper-slide">
                            <div class="big-slider__image-container">
                                <img src="/storage/{{ $slide['slide'] }}" alt="">
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-prev" id="bigSliderPrev"></div>
                <div class="swiper-button-next" id="bigSliderNext"></div>
            </div>
        </div>
    @endif
    <section>
        <div class="container">
            <div class="section__services">
                <div class="section__services-heading">
                    <p class="main-title">Услуги</p>
                    <p class="section__services-description">Наши проекты — это результат творческого союза архитекторов
                        с заказчиком. И поэтому
                        среди наших работ Вы не найдете двух одинаковых зданий. Мы меняем жизнь людей к лучшему.</p>
                </div>
                <div class="section__services-cards">
                    @foreach($services as $service)
                        <a href="{{ route('single-service', $service->id) }}">
                            <div class="service-card">
                                <div class="service-card__image-container">
                                    <img src="/storage/{{ $service['card_image'] }}" alt="">
                                </div>
                                <p class="service-card__title">{{ $service['title'] }}</p>
                                <p class="service-card__description">{{ $service['card_description'] }}</p>
                            </div>
                        </a>
                    @endforeach
                </div>
                <a href="/services" class="primary-btn">
                    Посмотреть ещё
                </a>
            </div>
        </div>
    </section>
    @include('components.achievements')
@endsection
