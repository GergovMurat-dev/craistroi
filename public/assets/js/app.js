$('.header__menu-burger').on('click', function () {
    $('.menu__burger').toggleClass('active')
})

$('.menu__burger-close').on('click', function () {
    $('.menu__burger').removeClass('active')
})
$(window).on('scroll', function () {
    if ($(window).scrollTop() > 50) {
        $('header').addClass('active')
    } else {
        $('header').removeClass('active')
    }
})

const bigSlider = new Swiper('#bigSlider', {
    slidesPerView: 1.3,
    centeredSlides: true,
    centerSlideBounds: true,
    speed: 600,
    autoplay: true,
    rewind: true,
    breakpoints: {
        1060: {
            spaceBetween: 60
        },
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
    $('.object-selector__mini-image-container').on('click', function () {
        $(this)
            .closest('.selector')
            .find('.object-selector__image-container > img')
            .attr('src', $(this)
                .find('img')
                .attr('src')
            )
    })

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

    let count = 0;

    $(document).keydown(function (e) {
        // Проверяем, какая клавиша была нажата
        switch (e.which) {
            case 37: // левая клавиша
                changeSlide('left');
                break;
            case 39: // правая клавиша
                changeSlide('right');
                break;
            default:
                return; // выходим, если это не стрелки
        }
        e.preventDefault(); // предотвращаем дефолтное поведение при нажатии клавиши
    });

    function changeSlide(state) {
        let maxCount = 0;
        $('.object-selector__mini-images-container').each(function () {
            // Подсчитываем количество элементов в текущем контейнере
            let count = $(this).children('.object-selector__mini-image-container').length;
            // Обновляем maxCount, если текущий count больше
            if (count > maxCount) {
                maxCount = count;
            }
        });
        
        switch (state) {
            case 'left':
                count > 0 ? count-- : count
                break;
            case 'right':
                count < maxCount - 1 ? count++ : count
                break;
            default:
                0
        }

        let slides = $('.object-selector__mini-images-container')
        slides.each(function () {
            let image = $(this).find(`div[data-position=${count}] > img`).attr('src')
            $(this)
                .closest('.selector')
                .find('.object-selector__image-container > img')
                .attr('src', image);
        })
    }


    $('.object-selector__mini-image-container').on('click', function () {
        let position = $(this).data('position');
        $('.selector').each(function () {
            let image = $(this)
                .find(`div[data-position=${position}] > img`)
                .attr('src')
            $(this)
                .find('.object-selector__image-container > img')
                .attr('src', image)
        })
    });

});
