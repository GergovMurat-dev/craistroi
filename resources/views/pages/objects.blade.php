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
                <a href="{{ route('all-objects') }}" class="section__show-btn primary-btn">
                    Посмотреть ещё
                </a>
            </div>
        </div>
    </section>
@endsection
