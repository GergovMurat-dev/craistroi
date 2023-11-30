@extends('template')

@section('title')
    Заголовок услуги
@endsection

@section('content')
    <div style="background-image: url('{{ asset('/assets/img/background.png') }}')" class="page-heading">
        <div class="container">
            <div class="page-heading__container">
                <p class="page-heading__title">строительство дорог и благоустройство территории</p>
                <p class="page-heading__description">УСЛУГИ</p>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="service__block">
                <div class="service__block__image-container">
                    <img src="" alt="">
                </div>
                <div class="service__block__content">
                    <p>Здание, построенное в 2018 году, выиграло несколько архитектурных. Здание, построенное
                        в 2018 году, выиграло несколько архитектурных. Здание, построенное в 2018 году, выиграло
                        несколько архитектурных. Здание, построенное в 2018 году, выиграло несколько архитектурных. </p>
                    <button class="primary-btn">
                        Заказать услугу
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section id="bigSliderContainer">
        <div class="container">
            <p class="main-title">СДАННЫЕ ОБЪЕКТЫ</p>
        </div>
        <div class="swiper" id="bigSlider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="big-slider__image-container">
                        <img src="{{ asset('/assets/img/slider_.png') }}" alt="">
                    </div>
                    <div class="big-slider__content">
                        <p class="big-slider__content__title">ООО “КОМПАНИЯ СТРОИТЕЛЬСТВО”</p>
                        <p class="big-slider__content__description">Работы по благоустройству и тому подобное</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="big-slider__image-container">
                        <img src="{{ asset('/assets/img/slider_.png') }}" alt="">
                    </div>
                    <div class="big-slider__content">
                        <p class="big-slider__content__title">ООО “КОМПАНИЯ СТРОИТЕЛЬСТВО”</p>
                        <p class="big-slider__content__description">Работы по благоустройству и тому подобное</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="big-slider__image-container">
                        <img src="{{ asset('/assets/img/slider_.png') }}" alt="">
                    </div>
                    <div class="big-slider__content">
                        <p class="big-slider__content__title">ООО “КОМПАНИЯ СТРОИТЕЛЬСТВО”</p>
                        <p class="big-slider__content__description">Работы по благоустройству и тому подобное</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="big-slider__image-container">
                        <img src="{{ asset('/assets/img/slider_.png') }}" alt="">
                    </div>
                    <div class="big-slider__content">
                        <p class="big-slider__content__title">ООО “КОМПАНИЯ СТРОИТЕЛЬСТВО”</p>
                        <p class="big-slider__content__description">Работы по благоустройству и тому подобное</p>
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev" id="bigSliderPrev"></div>
            <div class="swiper-button-next" id="bigSliderNext"></div>
        </div>
    </section>
    <div class="advantages">
        <div class="container">
            <div class="advantages__container">
                <p class="main-title">КАК МЫ РАБОТАЕМ</p>
                <div class="advantages__wrapper">
                    <div class="advantages__card">
                        <div class="advantages__card__icon-container">
                            <img src="{{ asset('/assets/img/advantages.svg') }}" alt="">
                        </div>
                        <div class="advantages__card__content">
                            <p class="advantages__card__title">Качество работы</p>
                            <p class="advantages__card__description">Реконструкция этого огромного по своим масштабам здания
                                торгово-развлекательный центр.</p>
                        </div>
                    </div>
                    <div class="advantages__card">
                        <div class="advantages__card__icon-container">
                            <img src="{{ asset('/assets/img/advantages.svg') }}" alt="">
                        </div>
                        <div class="advantages__card__content">
                            <p class="advantages__card__title">Доверие</p>
                            <p class="advantages__card__description">Реконструкция этого огромного по своим масштабам здания
                                торгово-развлекательный центр.</p>
                        </div>
                    </div>
                    <div class="advantages__card">
                        <div class="advantages__card__icon-container">
                            <img src="{{ asset('/assets/img/advantages.svg') }}" alt="">
                        </div>
                        <div class="advantages__card__content">
                            <p class="advantages__card__title">Широкий спектр услуг</p>
                            <p class="advantages__card__description">Реконструкция этого огромного по своим масштабам здания
                                торгово-развлекательный центр.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
