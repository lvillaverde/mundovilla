calcMargenImg = function (contenedor) {
    margenImg = $(contenedor).height() / 2 - 100 + 'px';
    return margenImg;
}

$(document).ready(function () {


	$('.popup').magnificPopup({
  		type: 'ajax',
  		tError: '<a href="%url%">The content</a> could not be loaded.'
	});

	/* Plugin de clima */

	$('#feedClima').weatherfeed(['ARBA0009']);

	/* Posición de noticias principales y breakpoints */

	var windowWidth = $(window).width(); 
	
	if (windowWidth >= 800) {
		$('.mod1col').css({'width': '33%'}).css({'width': '-=10px'});
		$('.mod2col').css({'width': '66%'}).css({'width': '-=10px'});
		$('.mod3col').css({'width': '100%'}).css({'width': '-=10px'});
		$('.modElement').css({'width': '33%'}).css({'width': '-=10px'}); 
		$('.sectionNoticia').css({'width': '67%'}).css({'width': '-=15px'});
		$('.asideNoticia').css({'display':'inline-block','width': '31.5%'}).css({'width': '-=15px'});
		console.log ('llega 800');
	}
	else if (windowWidth <= 400){
		$('.mod1col').css({'width': '100%'}).css({'width': '-=10px'});
		$('.mod2col').css({'width': '100%'}).css({'width': '-=10px'});
		$('.mod3col').css({'width': '100%'}).css({'width': '-=10px'});
		$('.modElement').css({'width': '100%'}).css({'width': '-=10px'}); 
		$('.sectionNoticia').css({'width': '100%'});
		$('.asideNoticia').css({'display': 'none'});
		console.log ('llega 400');
	}
	else if (windowWidth <= 600){
		$('.mod1col').css({'width': '100%'}).css({'width': '-=10px'});
		$('.mod2col').css({'width': '100%'}).css({'width': '-=10px'});
		$('.mod3col').css({'width': '100%'}).css({'width': '-=10px'});
		$('.modElement').css({'width': '49.4%'}).css({'width': '-=10px'});
		$('.sectionNoticia').css({'width': '100%'});
		$('.asideNoticia').css({'display': 'none'});
		console.log ('llega 600');
	}
	else {
		$('.mod1col').css({'width': '49.3%'}).css({'width': '-=10px'});
		$('.mod2col').css({'width': '49.3%'}).css({'width': '-=10px'});
		$('.mod3col').css({'width': '100%'}).css({'width': '-=10px'});
		$('.modElement').css({'width': '49.4%'}).css({'width': '-=10px'}); 
		$('.sectionNoticia').css({'width': '67%'}).css({'width': '-=15px'});
		$('.asideNoticia').css({'display':'inline-block','width': '31.5%'}).css({'width': '-=15px'}); 
	}


	/* Menu desplegable mobile */

	var anchoDiv = $('.menuMovil').width();
	$('#menuMovilCategoriasSubmenu').css({'width': anchoDiv });

	var anchoDiv2 = $('.menuHeaderMovil').width();
	$('#menuMovilSeccionesSubmenu').css({'width': anchoDiv });

	$('#menuMovilCategorias').click(function() {
		$('#menuMovilCategoriasSubmenu').slideToggle('fast');
	});

	$('#menuMovilSecciones').click(function() {
		$('#menuMovilSeccionesSubmenu').slideToggle('fast');
	});

	/* Ordenamiento de las noticias secundarias */
	$('#grillado').masonry({
		itemSelector: '.modElement',
		"gutter": 0
	}); 

	/*	$('.modBanner').each(function(){
		/* var image = new Image();
		image.src = $(this).children().attr("src");
		altoBanner = image.naturalHeight;
		console.log (altoBanner);
		$(this).parent().css({'height' : altoBanner}); 
		$(this).parent().css({'padding-bottom':'0'});
	});  */

	$('.modBanner').each(function(){
		$(this).parent().css({'padding-bottom':'0'});
		
	}); 

});

$(window).resize(function () {
	/* Posición de noticias principales, secundarias y breakpoints */
	var windowWidth = $(window).width(); 

	if (windowWidth >= 800) {
		$('.mod1col').css({'width': '33%'}).css({'width': '-=10px'});
		$('.mod2col').css({'width': '66%'}).css({'width': '-=10px'});
		$('.mod3col').css({'width': '100%'}).css({'width': '-=10px'});
		$('.modElement').css({'width': '33%'}).css({'width': '-=10px'}); 
		$('.sectionNoticia').css({'width': '67%'}).css({'width': '-=15px'});
		$('.asideNoticia').css({'display':'inline-block','width': '31.5%'}).css({'width': '-=15px'}); 
		console.log ('llega resize 800');
	}
	else if (windowWidth <= 400){
		$('.mod1col').css({'width': '100%'}).css({'width': '-=10px'});
		$('.mod2col').css({'width': '100%'}).css({'width': '-=10px'});
		$('.mod3col').css({'width': '100%'}).css({'width': '-=10px'});
		$('.modElement').css({'width': '100%'}).css({'width': '-=10px'});
		$('.sectionNoticia').css({'width': '100%'});
		$('.asideNoticia').css({'display': 'none'});
		console.log ('llega resize 400');
	}
	else if (windowWidth <= 600){
		$('.mod1col').css({'width': '100%'}).css({'width': '-=10px'});
		$('.mod2col').css({'width': '100%'}).css({'width': '-=10px'});
		$('.mod3col').css({'width': '100%'}).css({'width': '-=10px'});
		$('.modElement').css({'width': '49.4%'}).css({'width': '-=10px'});
		$('.sectionNoticia').css({'width': '100%'});
		$('.asideNoticia').css({'display': 'none'});
		console.log ('llega resize 600');
	}
	else {
		$('.mod1col').css({'width': '49.3%'}).css({'width': '-=10px'});
		$('.mod2col').css({'width': '49.3%'}).css({'width': '-=10px'});
		$('.mod3col').css({'width': '100%'}).css({'width': '-=10px'});
		$('.modElement').css({'width': '49.4%'}).css({'width': '-=10px'}); 
		$('.sectionNoticia').css({'width': '67%'}).css({'width': '-=15px'});
		$('.asideNoticia').css({'display':'inline-block','width': '31.5%'}).css({'width': '-=15px'}); 
	}

	var anchoDiv = $('.menuMovil').width();
	$('#menuMovilCategoriasSubmenu').css({'width': anchoDiv });

	var anchoDiv2 = $('.menuHeaderMovil').width();
	$('#menuMovilSeccionesSubmenu').css({'width': anchoDiv });

	/* posicion de imagenes */

	$('.noticiasPrincipales article figure img').each(function(){
	    var margenSuperior = calcMargenImg($(this));
	    $(this).css({'marginTop': '-' + margenSuperior}); 
	    console.log ('llega aca');
	}); 

});	



/* Alto de las noticias principales */

equalheight = function(container){

var currentTallest = 0,
     currentRowStart = 0,
     rowDivs = new Array(),
     $el,
     topPosition = 0;
 $(container).each(function() {

   $el = $(this);
   $($el).height('auto')
   topPostion = $el.position().top;

   if (currentRowStart != topPostion) {
     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
       rowDivs[currentDiv].height(currentTallest);
     }
     rowDivs.length = 0; // empty the array
     currentRowStart = topPostion;
     currentTallest = $el.height();
     rowDivs.push($el);
   } else {
     rowDivs.push($el);
     currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
  }
   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
     rowDivs[currentDiv].height(currentTallest);
   }
 });
}

$(window).load(function() {
  equalheight('.linea1 .noticiaPrincipal');

  /* posicion de imagenes */

	$('.noticiasPrincipales article figure img').each(function(){
	    var margenSuperior = calcMargenImg($(this));
	    $(this).css({'marginTop': '-' + margenSuperior}); 
	     console.log ('llega aca');
	}); 

	/* Fix alto de Banners */

});


$(window).resize(function(){
  equalheight('.linea1 .noticiaPrincipal');
});
