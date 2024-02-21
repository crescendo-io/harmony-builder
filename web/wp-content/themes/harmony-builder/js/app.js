function scrollToAnimate(scrollTo){
    $("html, body").stop().animate({scrollTop:scrollTo}, 100, 'swing');
}



$(window).on('load',function(){
   $('.button-menu').click(function(){
       scrollToAnimate(0);
      $('body').toggleClass('nav-is-visible');
   });
});