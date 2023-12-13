@php
    $settings = \App\Models\Setting::query()->firstOrNew();
@endphp

@if($settings?->achievements_title && count($settings?->achievements) > 0)
    <section class="achievements">
        <div class="container">
            <p class="main-title">Наши достижения</p>
        </div>
        <div class="achievements__container">
            <div class="achievements__slider">
                <div class="achievements__description">
                    Наши проекты — это результат творческого союза архитекторов с заказчиком. И поэтому среди наших
                    работ Вы не найдете двух одинаковых зданий. Мы меняем жизнь людей к лучшему.
                </div>
                <div class="swiper" id="achievementsSlider">
                    <div class="swiper-wrapper">
                        @foreach($settings?->achievements as $achievement)
                            <div class="swiper-slide">
                                <div class="achievementsSlide">
                                    <div class="achievementsSlide__image">
                                        <img src="/storage/{{ $achievement['image'] }}" alt="">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif

