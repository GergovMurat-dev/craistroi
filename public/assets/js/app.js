const bigSlider = new Swiper('#bigSlider', {
    spaceBetween: 60,
    slidesPerView: "auto",
    centeredSlides: true,
    speed: 600,
    autoplay: true,
    rewind: true,

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
    loop: true,
    slidesPerView: 2.5,
    spaceBetween: 30,
    speed: 600,

    navigation: {
        nextEl: '#achievementsSliderNext',
        prevEl: '#achievementsSliderPrev',
    },
})

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
