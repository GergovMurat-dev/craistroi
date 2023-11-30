@php
    $settings = \App\Models\Setting::query()->firstOrNew()
@endphp

<div class="banner">
    <div class="container">
        <div class="banner__container">
            <div class="banner__top">
                <p class="banner__top__title">Проекты</p>
                <p class="banner__top__description">{{ $settings->banner_description }}</p>
            </div>
            <div class="banner__bottom">
                <div>
                    <p class="banner__bottom__title">{{ $settings->project_count }}</p>
                    <p class="banner__bottom__description">Воплощенных проектов</p>
                </div>
                <div>
                    <p class="banner__bottom__title">{{ $settings->friendly_clients }}</p>
                    <p class="banner__bottom__description">Довольных клиентов</p>
                </div>
                <div>
                    <p class="banner__bottom__title">{{ $settings->prizes }}</p>
                    <p class="banner__bottom__description">Отраслевых наград</p>
                </div>
            </div>
        </div>
    </div>
</div>
