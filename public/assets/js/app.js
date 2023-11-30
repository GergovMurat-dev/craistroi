const bigSlider = new Swiper('#bigSlider', {
    loop: true,
    spaceBetween: 60,
    centeredSlidesBounds: true,
    slidesPerView: "auto",
    centeredSlides: true,
    effect: "coverflow",
    speed: 600,
    coverflowEffect: {
        rotate: 0,
        slideShadows: false,
    },

    navigation: {
        nextEl: '#bigSliderNext',
        prevEl: '#bigSliderPrev',
    },
})

const partnersSlider = new Swiper('#partnersSlider', {
    loop: true,
    spaceBetween: 30,
    slidesPerView: 3,
    autoplay: true
})

const achievementsSlider = new Swiper('#achievementsSlider', {
    spaceBetween: 30,
    slidesPerView: 4,
    centeredSlides: true,
    speed: 600,
    slideToClickedSlide: true,

    navigation: {
        nextEl: '#achievementsSliderNext',
        prevEl: '#achievementsSliderPrev',
    },
})

achievementsSlider.activeIndex = 1
$(document).ready(function () {
    $('.object-selector__mini-image-container').on('click', function () {
        $(this)
            .closest('.selector')
            .find('.object-selector__image-container > img')
            .attr('src', $(this)
                .find('img')
                .attr('src')
            )
    })
});
