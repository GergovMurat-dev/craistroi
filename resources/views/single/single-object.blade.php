@extends('template')

@section('title')
    Заголовок объекта
@endsection

@section('content')
    <div style="background-image: url('{{ asset('/assets/img/background.png') }}')" class="page-heading">
        <div class="container">
            <div class="page-heading__container">
                <p class="page-heading__title">Объект 1</p>
                <p class="page-heading__description">НАШИ ОБЪЕКТЫ</p>
            </div>
        </div>
    </div>
    <section class="object-page-section">
        <div class="container">
            <p class="object-page__title">Описание и особенности <br> реализации проекта</p>
            <p class="object-page__description">Здание, построенное в 2018 году, выиграло несколько архитектурных.
                Здание, построенное в 2018 году, выиграло несколько архитектурных. Здание, построенное в 2018 году,
                выиграло несколько архитектурных. Здание, построенное в 2018 году, выиграло несколько
                архитектурных. </p>
        </div>
    </section>
    <div class="object">
        <div class="container">
            <div class="object-selector">
                <div>
                    <p class="main-title">До</p>
                    <div class="selector">
                        <div class="object-selector__image-container">
                            <img src="" alt="">
                        </div>
                        <div class="object-selector__mini-images-container">
                            <div class="object-selector__mini-image-container">
                                <img src="{{ asset('/assets/img/background.png') }}" alt="">
                            </div>
                            <div class="object-selector__mini-image-container">
                                <img src="{{ asset('/assets/img/background.png') }}" alt="">
                            </div>
                            <div class="object-selector__mini-image-container">
                                <img src="{{ asset('/assets/img/background.png') }}" alt="">
                            </div>
                            <div class="object-selector__mini-image-container">
                                <img src="{{ asset('/assets/img/background.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="main-title">После</p>
                    <div class="selector">
                        <div class="object-selector__image-container">
                            <img src="" alt="">
                        </div>
                        <div class="object-selector__mini-images-container">
                            <div class="object-selector__mini-image-container">
                                <img src="{{ asset('/assets/img/background.png') }}" alt="">
                            </div>
                            <div class="object-selector__mini-image-container">
                                <img src="{{ asset('/assets/img/background.png') }}" alt="">
                            </div>
                            <div class="object-selector__mini-image-container">
                                <img src="{{ asset('/assets/img/background.png') }}" alt="">
                            </div>
                            <div class="object-selector__mini-image-container">
                                <img src="{{ asset('/assets/img/background.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
