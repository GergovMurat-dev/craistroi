@extends('template')

@section('title')
    Главная
@endsection

@section('content')
    <main style="background-image: url('{{ asset('/assets/img/background.png') }}')">
        <div class="container">
            <div class="main__container">
                <p class="main__title">СТРОИМ ПО-НОВОМУ</p>
                <p class="main__description">Мы материализуем мечты и желания. <br>
                    В проектах используем новейшие <br>
                    достижения мировой архитектуры.</p>
                <button class="primary-btn">
                    Получить консультацию
                </button>
            </div>
        </div>
    </main>
    <section>
        <div class="container">
            <div class="section__about-us">
                <div>
                    <p class="section__about-us__title main-title">О нас</p>
                    <p class="section__about-us__description">В нашем портфолио больше тысячи реализованных проектов. Мы
                        поможем Вам реализовать идею, при этом учтем все требования и пожелания. Вы доверите проект
                        компетентным специалистам.</p>
                    <a href="/" class="primary-btn">
                        Узнать больше
                    </a>
                </div>
                <div class="section__about-us__image-container">
                    <img src="{{ asset('/assets/img/home1.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <div class="banner">
        <div class="container">
            <div class="banner__container">
                <div class="banner__top">
                    <p class="banner__top__title">Проекты</p>
                    <p class="banner__top__description">Наши проекты — это результат творческого союза архитекторов с
                        заказчиком. И поэтому среди наших работ Вы не найдете двух одинаковых зданий. Мы меняем жизнь
                        людей к лучшему.</p>
                </div>
                <div class="banner__bottom">
                    <div>
                        <p class="banner__bottom__title">1000+</p>
                        <p class="banner__bottom__description">Воплощенных проектов</p>
                    </div>
                    <div>
                        <p class="banner__bottom__title">400+</p>
                        <p class="banner__bottom__description">Довольных клиентов</p>
                    </div>
                    <div>
                        <p class="banner__bottom__title">70</p>
                        <p class="banner__bottom__description">Отраслевых наград</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                    <img src="" alt="">
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
    <div class="partners">
        <div class="container">
            <p class="main-title">Партнёры</p>
            <div class="swiper" id="partnersSlider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('/assets/img/partner1.png') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('/assets/img/partner1.png') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('/assets/img/partner1.png') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('/assets/img/partner1.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="bigSliderContainer">
        <div class="swiper" id="bigSlider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ asset('/assets/img/slider_.png') }}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('/assets/img/slider_.png') }}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('/assets/img/slider_.png') }}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('/assets/img/slider_.png') }}" alt="">
                </div>
            </div>
            <div class="swiper-button-prev" id="bigSliderPrev"></div>
            <div class="swiper-button-next" id="bigSliderNext"></div>
        </div>
    </section>
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
    <section>
        <div class="section__achievements">
            <div class="container">
                <p class="main-title">Наши достижения</p>
            </div>
            <div class="swiper" id="achievementsSlider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <p>Наши проекты — это результат творческого союза архитекторов с заказчиком. И поэтому среди наших работ Вы не найдете двух одинаковых зданий. Мы меняем жизнь людей к лучшему.</p>
                    </div>
                    <div class="swiper-slide">
                        <div class="achievementsSlide">
                            <div class="achievementsSlide__image">
                                <img src="" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="achievementsSlide">
                            <div class="achievementsSlide__image">
                                <img src="" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="achievementsSlide">
                            <div class="achievementsSlide__image">
                                <img src="" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="achievementsSlide">
                            <div class="achievementsSlide__image">
                                <img src="" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
