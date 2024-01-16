$('.header__menu-burger').on('click', function () {
    $('.menu__burger').toggleClass('active')
})

$('.menu__burger-close').on('click', function () {
    $('.menu__burger').removeClass('active')
})


$('.__form').on('submit', function () {
    let result = true

    if (!$(this).find('.checkbox').hasClass('active')) {
        $(this).find('.checkbox').addClass('error')
        result = false
    } else {
        $(this).find('.checkbox').removeClass('error')
    }

    $(this)
        .find('input')
        .removeClass('error')
        .each(function () {
            if (!$(this).val()) {
                $(this).addClass('error')
                result = false
            }
        })

    if (!result) {
        return result
    }

    return result
});


$(document).ready(function () {
    Fancybox.bind("[data-fancybox]");

    let before = new Swiper('.sliderBefore')

    let after = new Swiper('.sliderAfter')

    let beforeThumb = new Swiper('.thumbBefore', {
        slidesPerView: 'auto',
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        spaceBetween: 15,
        on: {
            click: function () {
                var clickedIndex = this.clickedIndex;
                before.slideTo(clickedIndex);
            }
        }
    })
    let afterThumb = new Swiper('.thumbAfter', {
        slidesPerView: 'auto',
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        spaceBetween: 15,
        on: {
            click: function () {
                var clickedIndex = this.clickedIndex;
                after.slideTo(clickedIndex);
            }
        }
    })

// Добавление обработчика событий для клавиатурных нажатий
    $(".checkbox").on('click', function () {
        $(this).toggleClass('active')
    })

    $('.open-modal').on('click', function () {
        $('.modal').addClass('active')
        $('body').addClass('modal-active')

        let modalId = $(this).attr('data-modal');

        $(`#${modalId}`).addClass('active')
    })

    $('.form-close-btn').on('click', function () {
        $(this).closest('form').removeClass('active')
        $('body').removeClass('modal-active')
        $('.modal').removeClass('active')
    })

    $('.modal > form').on('click', function (event) {
        event.stopPropagation()
    })

    $('.modal').on('click', function () {
        $(this).removeClass('active')
        $('body').removeClass('modal-active')
    })
});

$(window).on('scroll', function () {
    if ($(window).scrollTop() > 50) {
        $('header').addClass('active')
    } else {
        $('header').removeClass('active')
    }
})

const bigSlider = new Swiper('#bigSlider', {
    centeredSlides: true,
    centerSlideBounds: true,
    speed: 600,
    autoplay: true,
    rewind: true,
    breakpoints: {
        1200: {
            spaceBetween: 60,
            slidesPerView: 1.3
        },
        300: {
            slidesPerView: 1,
            arrow: false
        }
    },

    navigation: {
        nextEl: '#bigSliderNext',
        prevEl: '#bigSliderPrev',
    },
})

const achievementsSlider = new Swiper('#achievementsSlider', {
    loop: true,
    spaceBetween: 30,
    speed: 600,
    breakpoints: {
        300: {
            slidesPerView: 1.5,
        },
        600: {
            slidesPerView: 2.5,
        }
    },

    navigation: {
        nextEl: '#achievementsSliderNext',
        prevEl: '#achievementsSliderPrev',
    },
})


let partner = new Splide('#partners', {
    perPage: 3,
    type: 'loop',
    gap: '1.87rem',
    arrows: false,
    autoplay: true,
    interval: 1500,
    speed: 1500,
    pagination: false,
    breakpoints: {
        970: {
            perPage: 2
        }
    }
});

partner.mount()


