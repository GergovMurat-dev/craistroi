@php use App\Models\About; @endphp

@extends('template')

@section('title')
    О нас
@endsection

@php
    $about = About::query()->firstOrNew();
@endphp

@section('content')
    <div style="background-image: url('{{ asset('/assets/img/background.png') }}')" class="page-heading">
        <div class="container">
            <div class="page-heading__container">
                <p class="page-heading__title">О КОМПАНИИ</p>
                <p class="page-heading__description">{{ $about?->page_description }}</p>
            </div>
        </div>
    </div>
    <section class="about-container">
        <div class="container">
            <div class="about-us__container">
                <div class="about-us__content">
                    <p class="about-us__content-title">{{ $about?->big_block_title }}</p>
                    <p class="about-us__content-description">{{ $about?->big_block_description }}</p>
                    <button class="primary-btn">
                        Получить консультацию
                    </button>
                </div>
                <div class="about-us__image-container">
                    <img src="/storage/{{ $about?->big_block_image }}" alt="">
                </div>
            </div>
        </div>
    </section>
    @include('components.projects-banner')
    <section>
        <div class="container">
            <p class="director__hide-text">
                {{ $about?->about_description }}
            </p>
            <div class="director__container">
                <div class="director__image-container">
                    <img src="/storage/{{ $about?->about_image }}" alt="">
                </div>
                <div class="director__content">
                    <p class="director__description">{{ $about?->about_description }}</p>
                    <div class="director__personal-info">
                        <p class="director__name">{{ $about?->about_title }}</p>
                        <p class="director__job">{{ $about?->about_subtitle }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('components.achievements')
@endsection
