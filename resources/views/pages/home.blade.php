@extends('template')

@section('title')
    Главная
@endsection

@section('content')
    <main style="background-image: url('/storage/{{$main->background_image}}')">
        <div class="container">
            <div class="main__container">
                <p class="main__title">{{ $main?->main_title }}</p>
                <p class="main__description">{{ $main?->main_description }}</p>
                <button class="primary-btn">
                    Получить консультацию
                </button>
                <a class="main__whatsapp" href="">
                    <img src="{{ asset('/assets/img/header__whatsapp.png') }}" alt="">
                </a>
            </div>
        </div>
    </main>
    @if($main?->about_us['description'] && $main?->about_us['image'])
        <section>
            <div class="container">
                <div class="section__about-us">
                    <div>
                        <p class="section__about-us__title main-title">О нас</p>
                        <p class="section__about-us__description">{{ $main?->about_us['description'] }}</p>
                        <a href="/" class="primary-btn">
                            Узнать больше
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
                    @for($i = 1; $i <= 6; $i++)
                        <a href="/" class="object__card-link">
                            <div class="object__card">
                                <div class="object__card-image">
                                    <div class="object__card-image__more">
                                        <p>Подробнее</p>
                                    </div>
                                    <img src="{{ asset('assets/img/home1.png') }}" alt="">
                                </div>
                                <p class="object__cart-title">
                                    Проект {{ $i }}
                                </p>
                                <p class="object__cart-description">
                                    Здание, построенное в 2018 году, выиграло несколько архитектурных наград и было
                                    упомянуто во множесте газетных и журнальных статей.
                                </p>
                            </div>
                        </a>
                    @endfor
                </div>
                <a href="" class="section__show-btn primary-btn">
                    Посмотреть ещё
                </a>
            </div>
        </div>
    </section>
    @if($main->partners)
        <div class="partners">
            <div class="container">
                <p class="main-title">Партнёры</p>
                <div class="swiper" id="partnersSlider">
                    <div class="swiper-wrapper">
                        @foreach($main->partners as $partner)
                            <div class="swiper-slide">
                                <img src="/storage/{{ $partner['slide'] }}" alt="">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if(!empty($main->big_slider))
        <section id="bigSliderContainer">
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
        </section>
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
                    @for($i = 0; $i < 3; $i++)
                        <a href="">
                            <div class="service-card">
                                <div class="service-card__image-container">
                                    <img src="" alt="">
                                </div>
                                <p class="service-card__title">Строительство домов</p>
                                <p class="service-card__description">Здание, построенное в 2018 году, выиграло несколько
                                    архитектурных.</p>
                            </div>
                        </a>
                    @endfor
                </div>
                <a href="" class="primary-btn">
                    Посмотреть ещё
                </a>
            </div>
        </div>
    </section>
    @include('components.achievements')
@endsection
