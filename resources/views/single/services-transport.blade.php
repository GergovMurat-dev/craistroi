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
            @for($i = 0; $i < 3; $i++)
                <div class="transport-card">
                    <div class="container">
                        <div class="transport-card__inner">
                            <div>
                                <p class="transport-card__inner__title">Экскаваторы-погрузчики</p>
                                <p class="transport-card__inner__price-hide">
                                    от 16000 руб./смена
                                </p>
                                <button class="primary-btn">
                                    Заказать услугу
                                </button>
                            </div>
                            <div class="transport-card__inner__image-container">
                                <img
                                    src="https://sportishka.com/uploads/posts/2022-11/1667474366_48-sportishka-com-p-banan-avto-vkontakte-51.jpg"
                                    alt="">
                            </div>
                            <p>
                                от 16000 руб./смена
                            </p>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </section>
@endsection
