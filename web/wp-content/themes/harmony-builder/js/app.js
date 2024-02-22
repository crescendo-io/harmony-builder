function scrollToAnimate(scrollTo){
    //$("html, body").stop().animate({scrollTop:scrollTo}, 100, 'swing');
}

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
});

