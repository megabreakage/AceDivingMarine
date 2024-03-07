$(document).ready(function () {
    /**
     * Toastr Notifications Switch
     * @param {string} type 
     * @param {string} message 
     */
    function notify(type, message) {
        const options = {
            closeButton: true,
            progressBar: true,
            timeOut: 10000
        };
        switch (type) {
            case 'success':
                toastr.success(message, 'Yeey!', options);
                break;
            case 'error':
                toastr.error(message, 'Oops!', options);
                break;
            case 'warning':
                toastr.warning(message, 'Alert!', options);
                break;
            default:
                toastr.info(message, 'Note:', options);
                break;
        }
    }

    $('#submitEnquiry').on('click', () => {
        this.disabled = true;
    })
    /** --------------------------------------------------------------- */

    /**
     * Coming Soon Slider settings
     */
    $(".coming-soon-slider").slick({
        dots: !1,
        arrows: !1,
        infinite: !0,
        autoplay: !0,
        speed: 3600,
        fade: !0,
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: !1
    })
    /** --------------------------------------------------------------- */

    /**
     * Destination Details Slider functions
     */
    // 1. Display Photo Slider Settings
    $('.slider-single').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        autoplay: true,
        fade: false,
        adaptiveHeight: true,
        infinite: false,
        useTransform: true,
        speed: 400,
        cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
    });

    // 2. Navigation thumbnails Slider Settings
    $('.slider-nav')
        .on('init', function (event, slick) {
            $('.slider-nav .slick-slide.slick-current').addClass('is-active');
        })
        .slick({
            slidesToShow: 5,
            slidesToScroll: 5,
            dots: !1,
            focusOnSelect: !1,
            infinite: !1,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 5,
                }
            }, {
                breakpoint: 640,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                }
            }, {
                breakpoint: 420,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                }
            }]
        });

    // 3. After Change of Main photo Function
    $('.slider-single').on('afterChange', function (event, slick, currentSlide) {
        $('.slider-nav').slick('slickGoTo', currentSlide);
        var currrentNavSlideElem = '.slider-nav .slick-slide[data-slick-index="' + currentSlide + '"]';
        $('.slider-nav .slick-slide.is-active').removeClass('is-active');
        $(currrentNavSlideElem).addClass('is-active');
    });

    // 4. Click Thumbnail photos Function
    $('.slider-nav').on('click', '.slick-slide', function (event) {
        event.preventDefault();
        var goToSingleSlide = $(this).data('slick-index');

        $('.slider-single').slick('slickGoTo', goToSingleSlide);
    });
    /** --------------------------------------------------------------- */
})