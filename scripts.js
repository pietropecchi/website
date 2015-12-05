/* global $ */
$(document).on('scroll', function () {
	if ($(document).scrollTop()< 5) {
    

    
     $('nav').hover(function(){
           
    $('nav').css('opacity', 1);
              $('nav').css('line-height', '80px');

              $('section').css('top', '80px');
                $('footer').css('top', '80px');
    }, function(){
    $('nav').css("opacity", 1);
              $('nav').css('line-height', '80px');

              $('section').css('top', '80px');
         $('footer').css('top', '80px');
});
    
 $('nav').css('opacity', 1);
          $('nav').css('line-height', '80px');
     
            $('section').css('top', '80px');   
         $('footer').css('top', '80px');
} else {
    
    
  $('nav').hover(function(){
            
    $('nav').css('opacity', 0.85);
           $('nav').css('line-height', '80px');
            $('section').css('top', '0px');
             $('footer').css('top', '0px');
    }, function(){
    $('nav').css("opacity", 0.4);
           $('nav').css('line-height', '80px');
            $('section').css('top', '0px');
         $('footer').css('top', '0px');
});
$('nav').css("opacity", 0.4);
              $('nav').css('line-height', '80px');   
              $('section').css('top', '0px');
                   $('footer').css('top', '0px');
}

});

