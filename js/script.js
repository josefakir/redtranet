/* DOCUMENT READY */
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
    $('#form').validate({
        rules : {
            nombre : 'required',
            email : {
                required : true,
                email : true
            },
            mensaje : 'required'
        },
        messages : {
            nombre : 'Campo necesario',
            email : {
                required : 'Campo necesario',
                email : 'Escriba un correo válido'
            },
            mensaje : 'Campo necesario'
        },submitHandler: function(form) {
             $.ajax({
                type: "POST",
                url: 'email.php',
                data: $('#form').serialize(),
                success : function(data){
                    $('.mensajecargando').hide();
                    $('.mensaje').show();
                     $('#form').trigger("reset");
                }
                ,beforeSend : function(){
                    $('#overlay').fadeIn('fast');
                }
            });
        }
    });
    $(document).on("click", "#cerrarmodal", function() { 
        $('#overlay').fadeOut('fast');
    });
});

/* SCROLL */
$(window).scroll(function() {
    $('#menumovil').slideUp();
    if ($(this).scrollTop() > 1){  
        $('header').addClass("sticky");
    }
    else{
        $('header').removeClass("sticky");
    }
});