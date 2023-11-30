@extends('template')

@section('title')
    Контакты
@endsection

@section('content')
    <div style="background-image: url('{{ asset('/assets/img/background.png') }}')" class="page-heading">
        <div class="container">
            <div class="page-heading__container">
                <p class="page-heading__title">Контакты</p>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="section__contacts">
                <div class="contacts__info">
                    <p class="contacts__title">Адрес</p>
                    <ul>
                        <li><p>ул. Ленина, 11, Москва</p></li>
                        <li><a href="mailto:о600777@yandex.ru.">о600777@yandex.ru.</a></li>
                        <li><a href="tel:+ 7  962 443 39 00">+ 7  962 443 39 00</a></li>
                    </ul>
                    <div class="contacts-socials">
                        <a href="">
                            <div class="contacts-socials__icon">
                                <img src="{{ asset('/assets/img/whatsapp-contacts.svg') }}" alt="">
                            </div>
                        </a>
                        <a href="">
                            <div class="contacts-socials__icon">
                                <img src="{{ asset('/assets/img/telegram.svg') }}" alt="">
                            </div>
                        </a>
                        <a href="">
                            <div class="contacts-socials__icon">
                                <img src="{{ asset('/assets/img/vk.svg') }}" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="contacts__map">

                </div>
            </div>
        </div>
    </section>
@endsection
