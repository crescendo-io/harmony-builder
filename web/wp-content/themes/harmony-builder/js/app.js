function scrollToAnimate(scrollTo){
    //$("html, body").stop().animate({scrollTop:scrollTo}, 100, 'swing');
}

$(document).mouseup(function(e)
{
    if($('body').hasClass('nav-is-visible')){
        var container = $(".menu, .button-menu");

        // if the target of the click isn't the container nor a descendant of the container
        if (!container.is(e.target) && container.has(e.target).length === 0)
        {
            $('body').removeClass('nav-is-visible');
        }
    }
});

$(window).on('load',function(){

    // Ouverture du menu
   $('.button-menu').click(function(){
       scrollToAnimate(0);
      $('body').toggleClass('nav-is-visible');
   });

   // Menu Fixe
    $(window).scroll(function() {
        // Récupérer la hauteur de défilement
        const scrollHeight = $(window).height();
        // Vérifier si l'utilisateur a fait défiler au-delà de la hauteur de l'écran
        if ($(window).scrollTop() > $(window).height()) {
            $('header').addClass('is-scrolled');

            setTimeout(function(){
                $('header').addClass('is-visible');
            }, 200);

        }else{
            $('header').removeClass('is-visible is-scrolled');
        }
    });

    // Accordeons
    $('.accordeon-item-title').click(function(){
       const el = $(this);

        el.parent().toggleClass('is-open');
        el.parent().find('.accordeon-item-text').slideToggle(100);
    });

    // Slider cards

    $('.swiper').each(function(){
        var el = this;
        var itemsDesk = el.dataset.itemsdesk;
        var itemsTablet = el.dataset.itemstablet;
        var itemsMobile = el.dataset.itemsmobile;
        var autoplay = el.dataset.autoplay

        if(autoplay){
            autoplayVl = true;
        }else{
            autoplayVl = false;
        }

        new Swiper(el, {
            // Optional parameters
            direction: 'horizontal',
            loop: true,
            autoplay: autoplayVl,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                320: {
                    slidesPerView: itemsMobile,
                    spaceBetween: 20
                },
                640: {
                    slidesPerView: itemsTablet,
                },
                1025: {
                    slidesPerView: itemsDesk,
                }
            }


            // And if we need scrollbar
        });
    });

});



