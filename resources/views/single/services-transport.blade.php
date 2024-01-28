@php use App\Models\Setting; @endphp
@extends('template')

@section('title')
    Грузоперевозки
@endsection

@section('content')
    @php
        $setting = Setting::query()->first();
    @endphp
    <div style="background-image: url('{{ asset('/assets/img/background.png') }}')" class="page-heading">
        <div class="container">
            <div class="page-heading__container">
                <p class="page-heading__title">{{ $setting->transport_title }}</p>
                <p class="page-heading__description">УСЛУГИ</p>
            </div>
        </div>
    </div>
    <section>
        <div class="services__transport-cards">
            @if (!empty($transports))
                @foreach($transports as $transport)
                    <div class="transport-card">
                        <div class="container">
                            <div class="transport-card__inner">
                                <div>
                                    <p class="transport-card__inner__title">{{ $transport?->title }}</p>
                                    <p class="transport-card__inner__price-hide">
                                        {{ $transport?->price }}
                                    </p>
                                    <button data-modal="small-form" class="primary-btn open-modal">
                                        Заказать услугу
                                    </button>
                                </div>
                                <div class="transport-card__inner__image-container">
                                    <img
                                        src="/storage/{{ $transport->image }}"
                                        alt="">
                                </div>
                                <p>
                                    {{ $transport?->price }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else

            @endif
        </div>
    </section>
@endsection
