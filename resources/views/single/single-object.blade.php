@extends('template')

@section('title')
    Заголовок объекта
@endsection

@section('content')
    <div style="background-image: url('{{ asset('/assets/img/background.png') }}')" class="page-heading">
        <div class="container">
            <div class="page-heading__container">
                <p class="page-heading__title">{{ $object->title }}</p>
                <p class="page-heading__description">НАШИ ОБЪЕКТЫ</p>
            </div>
        </div>
    </div>
    @if ($object?->description)
        <section class="object-page-section">
            <div class="container">
                <p class="object-page__title">Описание и особенности <br> реализации проекта</p>
                <p class="object-page__description">{{ $object->description }}</p>
            </div>
        </section>
    @endif

    @if (!empty($object->before && $object->after))
        <div class="object">
            <div class="container">
                <div class="object__sliders">
                    <div class="object-slider">
                        <p class="main-title">До</p>
                        <div class="slider-heading">
                            <div class="swiper sliderBefore">
                                <div class="swiper-wrapper">
                                    @foreach($object->before as $image)
                                        <a href="/storage/{{ $image }}" data-fancybox="gallery-before"
                                           class="swiper-slide">
                                            <img src="/storage/{{ $image }}"/>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="slider-thumbs">
                            <div class="swiper thumbBefore">
                                <div class="swiper-wrapper">
                                    @foreach($object->before as $image)
                                        <div class="swiper-slide">
                                            <img src="/storage/{{ $image }}"/>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="object-slider">
                        <p class="main-title">После</p>
                        <div class="slider-heading">
                            <div class="swiper sliderAfter">
                                <div class="swiper-wrapper">
                                    @foreach($object->after as $image)
                                        <a href="/storage/{{ $image }}" data-fancybox="gallery-after" class="swiper-slide">
                                            <img src="/storage/{{ $image }}"/>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="slider-thumbs">
                            <div class="swiper thumbAfter">
                                <div class="swiper-wrapper">
                                    @foreach($object->after as $image)
                                        <div class="swiper-slide">
                                            <img src="/storage/{{ $image }}"/>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
