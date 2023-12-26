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
                <div class="object-selector">
                    <div>
                        <p class="main-title">До</p>
                        <div class="selector">
                            <div class="object-selector__image-container">
                                <img src="/storage/{{ $object->before[0] }}" alt="">
                            </div>
                            <div class="object-selector__mini-images-container">
                                @foreach($object->before as $key => $image)
                                    <div data-position="{{ $key }}" class="object-selector__mini-image-container">
                                        <img src="/storage/{{ $image }}" alt="">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class="main-title">После</p>
                        <div class="selector">
                            <div class="object-selector__image-container">
                                <img src="/storage/{{ $object->after[0] }}" alt="">
                            </div>
                            <div class="object-selector__mini-images-container">
                                @foreach($object->after as $key => $image)
                                    <div data-position="{{ $key }}" class="object-selector__mini-image-container">
                                        <img src="/storage/{{ $image }}" alt="">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
