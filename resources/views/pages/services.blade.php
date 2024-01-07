@php use App\Models\Setting; @endphp
@extends('template')

@section('title')
    Услуги
@endsection

@section('content')
    <div style="background-image: url('{{ asset('/assets/img/background.png') }}')" class="page-heading">
        <div class="container">
            <div class="page-heading__container">
                <p class="page-heading__title">Услуги</p>
                <p class="page-heading__description">Реконструкция этого огромного по своим масштабам здания превратила
                    его в новый современный торгово-развлекательный центр.</p>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="section__services">
                <div class="section__services-cards">
                    @if($setting?->transport_image && $setting?->transport_title && $setting->transport_description)
                        <a href="/services/transport">
                            <div class="service-card">
                                <div class="service-card__image-container">
                                    <img src="/storage/{{ $setting->transport_image }}" alt="">
                                </div>
                                <p class="service-card__title">{{ $setting->transport_title }}</p>
                                <p class="service-card__description">{{ $setting->transport_description }}</p>
                            </div>
                        </a>
                    @endif
                    @foreach($services as $service)
                        <a href="{{ route('single-service', $service->id) }}">
                            <div class="service-card">
                                <div class="service-card__image-container">
                                    <img src="/storage/{{ $service->card_image }}" alt="">
                                </div>
                                <p class="service-card__title">{{ $service->title }}</p>
                                <p class="service-card__description">{{ $service->card_description }}</p>
                            </div>
                        </a>
                    @endforeach
                </div>
                @if ($show)
                    <a href="{{ route('all-services') }}" style="margin: 0 auto" class="primary-btn">
                        Загрузить ещё
                    </a>
                @endif
            </div>
        </div>
    </section>


    @if($title || $cards)
        <div class="advantages">
            <div class="container">
                <div class="advantages__container">
                    <p class="main-title">НАШИ ПРЕИМУЩЕСТВА</p>
                    <div class="advantages__wrapper">
                        @if($title)
                            <p>{{ $title }}</p>
                        @endif
                        @if(!empty($cards))
                            @foreach($cards as $card)
                                <div class="advantages__card">
                                    <div class="advantages__card__icon-container">
                                        <img src="{{ asset('/assets/img/advantages.svg') }}" alt="">
                                    </div>
                                    @if(!empty($card['card_title']))
                                        <p class="advantages__card__title">{{ $card['card_title'] }}</p>
                                    @endif
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
