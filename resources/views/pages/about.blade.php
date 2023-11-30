@extends('template')

@section('title')
    О нас
@endsection

@section('content')
    <div style="background-image: url('{{ asset('/assets/img/background.png') }}')" class="page-heading">
        <div class="container">
            <div class="page-heading__container">
                <p class="page-heading__title">О КОМПАНИИ</p>
                <p class="page-heading__description">Реконструкция этого огромного по своим масштабам здания превратила
                    его в новый современный торгово-развлекательный центр.</p>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="about-us__container">
                <div class="about-us__content">
                    <p class="about-us__content-title">Заголовок</p>
                    <p class="about-us__content-description">
                        Реконструкция этого огромного по своим масштабам здания превратила его в новый современный
                        торгово-развлекательный центр.
                    </p>
                    <button class="primary-btn">
                        Получить консультацию
                    </button>
                </div>
                <div class="about-us__image-container">

                </div>
            </div>
        </div>
    </section>
    @include('components.projects-banner')
    <section>
        <div class="container">
            <div class="director__container">
                <div class="director__image-container">
                    <img src="" alt="">
                </div>
                <div class="director__content">
                    <p class="director__description">
                        Цитатацитатацитатацитатат атататаат аомткпмт окоупмтокфпмтфкуолпток фжлупмтоклтмокмт кофимофтоа тиокотмо.
                    </p>
                    <div class="director__personal-info">
                        <p class="director__name">
                            Ткачетко Игорь Николаевич
                        </p>
                        <p class="director__job">
                            Генеральный диреетор ООО”Компания”
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('components.achievements')
@endsection
