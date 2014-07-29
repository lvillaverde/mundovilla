calcMargenImg = function(contenedor) {
	
	altoImg = $(contenedor).height();
	console.log(altoImg);

	altoCont = $(contenedor).parent().height();
	console.log(altoCont);

    margenImg = altoImg - altoCont;
    console.log(margenImg);

    return margenImg;
}

$(document).ready(function () {


	/* modals */

	$('.ajax-popup-link').magnificPopup({
  		type: 'ajax'
	});

	$('.gallery').magnificPopup({
	  type: 'image',
	  gallery:{
	    enabled:true
	  }
	});

	/* clima */

	$('#feedClima').weatherfeed(['ARBA0009']);

		
	/* ordenamiento */
	
	$('#grillado').masonry({
		itemSelector: '.modElement'
	}); 

	$('.asideNoticia').masonry({
		itemSelector: '.asideNoticia > div'
	}); 

	var $container = $('#grillado').masonry();
	var $container2 = $('.asideNoticia').masonry();

	$container.imagesLoaded( function() {
	  $container.masonry();
	});

	$container2.imagesLoaded( function() {
	  	$container2.masonry();
	  	/* igualar columnas */
		$(".columna").equalHeights();
	});

});

$(window).load(function() {

	/* slide */

	$('.flexslider').flexslider({
    	animation: "fade"
  	});

  	/* escala img de slide */

    $(".itemSlide").backgroundScale({
        imageSelector: ".imgSlide",
 
        containerPadding: 100
    });


});

/* ocultar desplegables */

function toggleDiv(divID) {
    $("#" + divID).fadeToggle(1, function() {
        openDiv = $(this).is(':visible') ? divID : null;
        $("#" + divID).toggleClass('muestroOptions');
    });
    
}

$(document).click(function(e) {
    if (!$(e.target).closest('#'+openDiv).length) {
        toggleDiv(openDiv);
    }
});

/* igualar columnas */

   (function($) {
     $.fn.equalHeights = function(minHeight, maxHeight) {
      tallest = (minHeight) ? minHeight : 0;
      this.each(function() {
       if($(this).height() > tallest) {
        tallest = $(this).height();
      }
    });
      if((maxHeight) && tallest > maxHeight) tallest = maxHeight;
      return this.each(function() {
       $(this).height(tallest).css("overflow","visible");
     });
    }
  })(jQuery);



$(document).on("click",".sendContacto", function(){

	$.post( "/send.php", { nombre : $("#nombre").val(), asunto: $("#asunto").val(), email: $("#email").val(), mensaje: $("#mensaje").val() });
	$(".mfp-close").click();

});