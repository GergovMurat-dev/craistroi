<footer>
    <div class="container">
        <div class="footer__container">
            <div class="footer__container__menu">
                <a class="footer__logo-link" href="{{ route('home') }}">
                    <div class="footer__logo">
                        <div class="footer__logo-container">
                            <img src="{{ asset('/assets/img/logo.png') }}" alt="">
                        </div>
                        <p>КРАЙСТРОЙ</p>
                    </div>
                </a>
                <div class="footer__container__menu-container">
                    <div class="menu__section">
                        <p class="menu__title">Навигация</p>
                        <ul>
                            <li><a href="/services">Услуги</a></li>
                            <li><a href="/objects">Наши объекты</a></li>
                            <li><a href="/about">О нас</a></li>
                            <li><a href="/contacts">Контакты</a></li>
                        </ul>
                    </div>
                    @php
                        use App\Models\Contact;

                        $contacts = Contact::query()->firstOrNew();
                    @endphp
                    <div class="menu__section">
                        <p class="menu__title">Соцсети</p>
                        <ul>
                            @if($contacts?->telegram)
                                <li><a href="{{ $contacts?->telegram }}">Telegram</a></li>
                            @endif
                            @if($contacts?->vk)
                                <li><a href="{{ $contacts?->vk }}">Vkontakte</a></li>
                            @endif
                            @if($contacts?->email)
                                <li><a href="mailto:{{ $contacts?->email }}">Email</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer__container__invite">
                <p class="invite__title">
                    Запишитесь <br> на консультацию
                </p>
                <p class="invite__description">
                    Оставьте заявку, и мы свяжемся с вами
                </p>
                <button data-modal="small-form" class="primary-btn open-modal">
                    Заполнить
                </button>
            </div>
        </div>
    </div>
</footer>
