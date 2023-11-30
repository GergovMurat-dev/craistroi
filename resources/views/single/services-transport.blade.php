@extends('template')

@section('title')
    Грузоперевозки
@endsection

@section('content')
    <div style="background-image: url('{{ asset('/assets/img/background.png') }}')" class="page-heading">
        <div class="container">
            <div class="page-heading__container">
                <p class="page-heading__title">грузоперевозки сыпучих материалов</p>
                <p class="page-heading__description">УСЛУГИ</p>
            </div>
        </div>
    </div>
    <section>
        <div class="services__transport-cards">
            <div class="transport-card">
                <div class="container">
                    <div class="transport-card__inner">
                        <div>
                            <p class="transport-card__inner__title">Экскаваторы-погрузчики</p>
                            <button class="primary-btn">
                                Заказать услугу
                            </button>
                        </div>
                        <div class="transport-card__inner__image-container">
                            <img src="" alt="">
                        </div>
                        <p>
                            от 16000 руб./смена
                        </p>
                    </div>
                </div>
            </div>
            <div class="transport-card">
                <div class="container">
                    <div class="transport-card__inner">
                        <div>
                            <p class="transport-card__inner__title">Экскаваторы</p>
                            <button class="primary-btn">
                                Заказать услугу
                            </button>
                        </div>
                        <div class="transport-card__inner__image-container">
                            <img src="" alt="">
                        </div>
                        <p>
                            от 16000 руб./смена
                        </p>
                    </div>
                </div>
            </div>
            <div class="transport-card">
                <div class="container">
                    <div class="transport-card__inner">
                        <div>
                            <p class="transport-card__inner__title">Экскаваторы-погрузчики</p>
                            <button class="primary-btn">
                                Заказать услугу
                            </button>
                        </div>
                        <div class="transport-card__inner__image-container">
                            <img src="" alt="">
                        </div>
                        <p>
                            от 16000 руб./смена
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
