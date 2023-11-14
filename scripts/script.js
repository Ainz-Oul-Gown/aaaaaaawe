$(function(){
    $('a[href^="#"]').click(function () {
        elementID = $(this).attr("href");
        position = $(elementID).offset().top;
        $('html, body').animate({scrollTop: position}, 800);

        return false;
    });
});

$('.fade').slick({
    dots: false,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    autoplay: true,
    autoplaySpeed: 5000
});