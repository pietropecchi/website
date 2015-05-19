$(document).on('scroll', function () {
	if ($(document).scrollTop()< 5) {
    $('nav').css('opacity', 1);
          $('nav').css('line-height', '100px');
     
            $('section').css('top', '100px');

    
     $('nav').hover(function(){
           1
    $('nav').css('opacity', 1);
              $('nav').css('line-height', '100px');

              $('section').css('top', '100px');
    }, function(){
    $('nav').css("opacity", 1);
              $('nav').css('line-height', '100px');

              $('section').css('top', '100px');
    
});
    
    
    
} else {
    $('nav').css("opacity", 0.4);
              $('nav').css('line-height', '74px');   
              $('section').css('top', '0px');
    
  $('nav').hover(function(){
            
    $('nav').css('opacity', 0.85);
           $('nav').css('line-height', '74px');
            $('section').css('top', '0px');
    }, function(){
    $('nav').css("opacity", 0.4);
           $('nav').css('line-height', '74px');
            $('section').css('top', '0px');
    
});
}

});

