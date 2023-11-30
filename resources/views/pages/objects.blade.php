@extends('template')

@section('title')
    Объекты
@endsection

@section('content')
    <div style="background-image: url('{{ asset('/assets/img/background.png') }}')" class="page-heading">
        <div class="container">
            <div class="page-heading__container">
                <p class="page-heading__title">НАШИ ОБЪЕКТЫ</p>
                <p class="page-heading__description">Реконструкция этого огромного по своим масштабам здания превратила
                    его в новый современный торгово-развлекательный центр.</p>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="section__objects">
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
@endsection
