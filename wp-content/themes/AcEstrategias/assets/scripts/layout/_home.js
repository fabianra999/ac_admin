(function () {

    // carusel home
    jQuery(function ($) {
        $(".descripcionSlier").slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: true
        });
        console.log($(".descripcionSlier"));
    });
    console.log('hola home');

})();
