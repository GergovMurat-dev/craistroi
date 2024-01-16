@php
    use App\Models\Contact;

    $contacts = Contact::query()->firstOrNew();
@endphp
<header>
    <div class="menu__burger">
        <div class="container">
            <ul class="">
                <div class="menu__burger-close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                        <line x1="0.646447" y1="14.6464" x2="14.6464" y2="0.646449" stroke="white"/>
                        <line x1="0.646447" y1="14.6464" x2="14.6464" y2="0.646449" stroke="white"/>
                        <line x1="1.35355" y1="0.646447" x2="15.3536" y2="14.6464" stroke="white"/>
                        <line x1="1.35355" y1="0.646447" x2="15.3536" y2="14.6464" stroke="white"/>
                    </svg>
                </div>
                <li><a href="/services">Услуги</a></li>
                <li><a href="/about">О нас</a></li>
                <li><a href="/objects">Наши объекты</a></li>
                <li><a href="/contacts">Контакты</a></li>
            </ul>
            <div class="menu__burger-contacts">
                <div class="menu__burger-links">
                    @if ($contacts?->email)
                        <a href="mailto:{{ $contacts?->email }}">{{ $contacts?->email }}</a>
                    @endif
                    @if($contacts?->phone)
                        <a href="tel:{{ $contacts?->phone }}">{{ $contacts?->phone }}</a>
                    @endif
                </div>
                <div class="contacts-socials">
                    @if ($contacts?->whatsapp)
                        <a href="{{ $contacts?->whatsapp }}">
                            <div class="contacts-socials__icon">
                                <img src="{{ asset('/assets/img/whatsapp-white.svg') }}" alt="">
                            </div>
                        </a>
                    @endif
                    @if($contacts?->telegram)
                        <a href="{{ $contacts?->telegram }}">
                            <div class="contacts-socials__icon">
                                <img src="{{ asset('/assets/img/tg-white.svg') }}" alt="">
                            </div>
                        </a>
                    @endif
                    @if($contacts?->vk)
                        <a href="{{ $contacts?->vk }}">
                            <div class="contacts-socials__icon">
                                <img src="{{ asset('/assets/img/vk-white.svg') }}" alt="">
                            </div>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="header__container">
            <a href="/">
                <div class="header__logo-container">
                    <div class="header__logo-image-container">
                        <img src="{{ asset('/assets/img/logo.png') }}" alt="">
                    </div>
                    <p class="header__logo-subtext">крайстрой</p>
                </div>
            </a>
            <div class="header__menu">
                <ul class="menu-hidden">
                    <li><a href="/services">Услуги</a></li>
                    <li><a href="/about">О нас</a></li>
                    <li><a href="/objects">Наши объекты</a></li>
                    <li><a href="/contacts">Контакты</a></li>
                </ul>
                <div class="menu-hidden">
                    <a data-modal="small-form" class="open-modal">Заказать обратный звонок</a>
                    @if ($contacts?->phone)
                        <p>{{ $contacts?->phone }}</p>
                    @endif
                </div>
            </div>
            <div class="header__menu-burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>
<div class="modal">
    <form class="__form" action="{{ route('applications.store') }}" method="post" id="big-form">
        @csrf
        <div class="form-close-btn">
            <svg viewPort="0 0 12 12" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <line x1="1" y1="15"
                      x2="15" y2="1"
                      stroke="#fff"
                      stroke-width="2"/>
                <line x1="1" y1="1"
                      x2="15" y2="15"
                      stroke="#fff"
                      stroke-width="2"/>
            </svg>
        </div>
        <p class="form__title">Заполните форму</p>
        <div class="form__input-wrapper">
            <input type="text" name="name" placeholder="Имя">
            <input type="number" name="phone" placeholder="Номер телефона">
            <input type="email" name="email" placeholder="Почта">
            <textarea name="message" rows="8" placeholder="Комментарий"></textarea>
        </div>
        <button type="submit" class="primary-btn">
            Отправить
        </button>
        <div class="personal-checkbox">
            <div class="checkbox">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M17 5.70284L7.7828 15L3 10.1757L3.6968 9.47287L7.7828 13.5943L16.3032 5L17 5.70284Z"
                          fill="white"/>
                </svg>
            </div>
            <p>Даю согласие на обработку <a href="/">Персональных данных</a></p>
        </div>
    </form>

    <form class="__form" action="{{ route('applications.store') }}" method="post" id="small-form">
        @csrf
        <div class="form-close-btn">
            <svg viewPort="0 0 12 12" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <line x1="1" y1="15"
                      x2="15" y2="1"
                      stroke="#fff"
                      stroke-width="2"/>
                <line x1="1" y1="1"
                      x2="15" y2="15"
                      stroke="#fff"
                      stroke-width="2"/>
            </svg>
        </div>
        <p class="form__title">Заполните форму</p>
        <div class="form__input-wrapper">
            <input type="text" name="name" placeholder="Имя">
            <input type="number" name="phone" placeholder="Номер телефона">
        </div>
        <button type="submit" class="primary-btn">
            Отправить
        </button>
        <div class="personal-checkbox">
            <div class="checkbox">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M17 5.70284L7.7828 15L3 10.1757L3.6968 9.47287L7.7828 13.5943L16.3032 5L17 5.70284Z"
                          fill="white"/>
                </svg>
            </div>
            <p>Даю согласие на обработку <a href="/">Персональных данных</a></p>
        </div>
    </form>
</div>
