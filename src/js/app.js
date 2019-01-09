import jquery from 'jquery';
import Flickity from 'flickity';
// import ScrollReveal from 'scrollreveal';
import 'flickity/dist/flickity.css';
import IMask from 'imask';

window.jQuery = window.$ = jquery;


(function () {

    /**
     * Burger-menu
     */
    $('.burger-menu').click(function () {
        var menu = $('.menu');
        $(this).toggleClass('active');
        if (menu.is(':visible')) {
            menu.slideUp();
        } else {
            menu.slideDown();
        }
    });

    /**
     * Scroll
     */
    $(".scroll-link").on("click", function (event) {
        event.preventDefault();

        var id = $(this).attr('href');

        if (id.length > 1) {

            var top = ($(id).offset().top - $('#app-header').height());

            $('body,html').animate({
                scrollTop: top
            }, 1500);

            $('.burger-menu').removeClass('active');
            $('.menu').removeClass('active');
        }
    });

    /**
     * Form
     */
    $('.form-control').on('focus', function () {
        $(this).parents('.form-group').addClass('in-focus');
    });

    $('.form-control').on('blur', function () {
        if ($(this).val() !== "") {
            $(this).parents('.form-group').addClass('in-focus');
        } else {
            $(this).parents('.form-group').removeClass('in-focus');
        }
    });

    $('.label-search').on('click', function () {
        $('.form-control-search').toggleClass('active');
    });
    $('.form-control-search').on('blur', function () {
        $(this).removeClass('active');
    })

    /**
     * Phone mask
     * @type {*|jQuery.fn.init|jQuery|HTMLElement}
     */
    const phones = $('[type="tel"]');
    Array.from(phones).forEach(phone => {
        new IMask(phone, {
            mask: '+{38} (000) 000-00-00'
        });
    });

    /**
     * Header change list li:Hover 
     */
    $('.header-change-list').hover(function () {
        $(this).children().not('.active').addClass('is-hover');
    }, function () {
        $(this).children().not('.active').removeClass('is-hover');
    });

    /**
     * Filter hidden list hover
     */
    $('.filter-list-item__link').on('click', function (e) {
        if ($(this).siblings('.filter-hidden-list').length > 0) {
            e.preventDefault();
            $(this).siblings('.filter-hidden-list').slideToggle();
        }
    });

    /**
     * Modal
     */

    // var orderModal = $('.custom-modal--order');
    // var closeModal = $('.close-modal');
    // var modalMask = $('.modal-mask');

    // $('.open-order').on('click', function (e) {
    //     e.preventDefault();
    //     $(orderModal).addClass('active');
    //     $(modalMask).addClass('active');
    // });

    // $(closeModal).on('click', function () {
    //     $(orderModal).removeClass('active');
    //     $(modalMask).removeClass('active');
    // });

    // $(modalMask).on('click', function () {
    //     $(orderModal).removeClass('active');
    //     $(modalMask).removeClass('active');
    // });

    // $(document).on('keyup', function (e) {
    //     if (e.keyCode === 27) {
    //         $(orderModal).removeClass('active');
    //         $(modalMask).removeClass('active');
    //     }
    // });


    /**
     * Sliders
     */
    if ($('.intro-slider')) {

        var elem1 = document.querySelector('.intro-slider');
        if (elem1) {

            const flkty1 = new Flickity(elem1, {
                prevNextButtons: false,
                cellAlign: 'center',
                contain: true,
                draggable: false,
                cellSelector: '.intro-slider__item',
                wrapAround: false,
            });

            var prevArrowIntro = document.querySelector('.slider-arrow-item--prev-intro');
            var introSliderIndex = document.querySelector('.slider-nav-number-item--index-intro');

            introSliderIndex.innerText = flkty1.selectedIndex + 1;

            prevArrowIntro.addEventListener('click', function () {
                flkty1.previous(false, false);
                introSliderIndex.innerText = flkty1.selectedIndex + 1;
            });

            var nextArrowIntro = document.querySelector('.slider-arrow-item--next-intro');

            nextArrowIntro.addEventListener('click', function () {
                flkty1.next(false, false);
                introSliderIndex.innerText = flkty1.selectedIndex + 1;
            });

            var introSliderlast = document.querySelector('.slider-nav-number-item--last-intro');

            introSliderlast.innerText = flkty1.getCellElements().length;

        }
    }

    if ($('.new-articles-slider')) {

        var elem2 = document.querySelector('.new-articles-slider');
        if (elem2) {

            const flkty2 = new Flickity(elem2, {
                prevNextButtons: false,
                pageDots: false,
                cellAlign: 'left',
                contain: true,
                draggable: false,
                cellSelector: '.new-articles-slider-item',
                wrapAround: true,
            });

            var prevArrowNewArtic = document.querySelector('.slider-arrow-item--prev-new-articles');
            var NewArticSliderIndex = document.querySelector('.slider-nav-number-item--index-new-articles');

            NewArticSliderIndex.innerText = flkty2.selectedIndex + 1;

            prevArrowNewArtic.addEventListener('click', function () {
                flkty2.previous(false, false);
                NewArticSliderIndex.innerText = flkty2.selectedIndex + 1;
            });

            var nextArrowNewArtic = document.querySelector('.slider-arrow-item--next-new-articles');

            nextArrowNewArtic.addEventListener('click', function () {
                flkty2.next(false, false);
                NewArticSliderIndex.innerText = flkty2.selectedIndex + 1;
            });

            var NewArticSliderlast = document.querySelector('.slider-nav-number-item--last-new-articles');

            NewArticSliderlast.innerText = flkty2.getCellElements().length;
        }
    }

    /**
     * Animate scroll
     */
    // ScrollReveal().reveal('.intro-item', {
    //     origin: 'left',
    //     delay: 400,
    //     distance: '200px',
    // });
    // ScrollReveal().reveal('.intro-order', {
    //     origin: 'right',
    //     delay: 400,
    //     distance: '200px',
    // });
    // ScrollReveal().reveal('.pain-item', {
    //     origin: 'left',
    //     delay: 400,
    //     distance: '200px',
    // });
    // ScrollReveal().reveal('.pain-beforeAfter', {
    //     origin: 'right',
    //     delay: 400,
    //     distance: '200px',
    // });
    // ScrollReveal().reveal('.response-item', {
    //     origin: 'bottom',
    //     delay: 400,
    //     distance: '200px',
    // });

})(jQuery)


/**
 * Filter Rangre Multiply 
 */
var elm = document.getElementById('catalog-filter-price');
if (elm) {
    var container = elm.parentNode;
    var values = elm.getAttribute('data-values').split(' ');

    values.forEach(function (value, i, values) {
        var rangePart = elm.cloneNode();
        rangePart.type = 'range';
        rangePart.removeAttribute('data-values');
        rangePart.value = value;
        rangePart = container.insertBefore(rangePart, elm);
    });

    elm.remove();
}