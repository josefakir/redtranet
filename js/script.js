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
    });
    $('#p1').parallax({imageSrc: 'img/p1.jpg'});
    $('#p2').parallax({imageSrc: 'img/p2.jpg'});
    $('#p3').parallax({imageSrc: 'img/p3.jpg'});
    $('#p4').parallax({imageSrc: 'img/p4.jpg'});
    $('#p5').parallax({imageSrc: 'img/p5.jpg'});
    $('#p6').parallax({imageSrc: 'img/p6.jpg'});
    $('#p7').parallax({imageSrc: 'img/p7.jpg'});
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