<?php
	header('Content-Type: text/html; charset=utf-8');
	require_once __DIR__."/../Repositories/SectionRepository.php";
	require_once __DIR__."/../Helpers/DateHelper.php";
	$sections = SectionRepository::getInstance()->getAll();
?>
<!doctype html>
<html>
<head>
	<title>Mundo Villa</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.5, maximum-scale=1">
	<?php
		if(isset($metas)) echo $metas;
	?>
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
	<link href='css/style.css' rel='stylesheet' type='text/css'>
	<link href='css/modal.css' rel='stylesheet' type='text/css'>
	<link href="css/flexslider.css" rel="Stylesheet" />
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="js/modernizr.custom.30025.js"></script>
	<script src="js/jquery.zweatherfeed.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/modal.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/jquery.background.image.scale-0.1.js"></script>
	<script>

	</script>
	<!--[if IE 8]>
		<link href='css/style-ie8.css' rel='stylesheet' type='text/css'>
	<![endif]-->

	<!--[if gte IE 9]>
		<link href='css/style-ie9.css' rel='stylesheet' type='text/css'>
	 <![endif]-->

	<!--[if (lt IE 9) & (!IEMobile)]>
	 	<script src="js/respond.min.js"></script>
	 <![endif]-->
</head>
<body>
	<div id="fb-root"></div>


<!-- DESCOMENTAR EN PRODUCCION (Facebook plugin)

	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&appId=570313429664476&version=v2.0";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script> -->

	<div class="principal">
	<header>
		<div class="MundoVilla">
			<div class="headerLogo">
				<a href="/"><figure></figure></a>
			</div>
			<p class="headerFecha"><?php echo DateHelper::stringDate(); ?> - <span id="feedClima"></span> </p>
		</div>
		<a class="headerMenuDesp" id="headerMenuDesp"  href="#"onclick="toggleDiv('MenuDesp');">Secciones</a>
		<div class="MenuDesp" id="MenuDesp">
			<ul class="categoriasMobile">
				<?php 
					foreach ($sections as $key => $section) {
						?><a href="<?php echo $section->getLink();?>"><li><?php echo $section->getName() ?></li></a><?php
					} 
				?>
			</ul>
			<ul class="categoriasOtros">
				<li class="ultimoItem"><a href="ajax/voluntariado.php" class="popup">Lo más visto</a></li>
				<li class="ultimoItem"><a href="http://issuu.com/mundovilla" target="_blank">Edición impresa</a></li>
				<li class="ultimoItem"><a href="ajax/quienes-somos.php" class="ajax-popup-link">Quiénes somos</a></li>
				<li class="ultimoItem"><a href="ajax/voluntariado.php" rel="modal:open" class="ajax-popup-link">Voluntariado</a></li>
			</ul>
		</div>
		<a id="headerBtnOptions" class="headerBtnOptions" href="#"onclick="toggleDiv('headerOptions');">Opciones</a>
		<div id="headerOptions" class="headerOptions">
			<fieldset>
				<input>
				<button><span class="icon-search"></span></button>
			</fieldset>
		</div>
		<a class="headerBtnContacto" href="#"onclick="toggleDiv('redesSociales');">Contacto</a>
		<div id="redesSociales" class="redesSociales">
			<div>
				<a href="https://www.facebook.com/mundovilla" target="_blank" class="icon-facebook"></a>
				<a href="https://twitter.com/mundo_villa" target="_blank" class="icon-twitter"></a>
				<a href="ajax/contacto.php" class="ajax-popup-link icon-mail popup"></a>
				<a href="" class="icon-rss"></a>
			</div>
		</div>

		
	</header>
	
	<nav>
		<ul>
			<?php 
				foreach ($sections as $key => $section) {
					if($key == 0) {
						?><a href="<?php echo $section->getLink();?>"><li><button><?php echo $section->getName() ?></button></li></a><?php
					} else {
						?><a href="<?php echo $section->getLink();?>"><li><span>■</span><button><?php echo $section->getName() ?></button></li></a><?php
					}
				}
			?>
		</ul>
	</nav> 