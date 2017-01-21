$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop:true,
        items: 1,
        nav:false,
        dots:false,
        autoplay:true,
        autoplayTimeout:5000,
    });
    $('#triggermenu').click(function(e){
    	e.preventDefault();
    	$('#menumovil').slideToggle();
    })
})
  $(window).scroll(function() {
    $('#menumovil').slideUp();
    if ($(this).scrollTop() > 1){  
        $('header').addClass("sticky");
    }
    else{
        $('header').removeClass("sticky");
    }
});