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
	<link href='http://fonts.googleapis.com/css?family=Fauna+One' rel='stylesheet' type='text/css'>
	<link href='css/style.css' rel='stylesheet' type='text/css'>
	<link href="css/modal.css" rel="Stylesheet" />
	<link href="css/modal-darktheme.css" rel="Stylesheet" />
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="js/modernizr.custom.30025.js"></script>
	<script src="js/jquery.zweatherfeed.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/modal.js" type="text/javascript"></script>
	<script>
        $("#popup").modalbox({
            Type: 'ajax',
            Width: 600,
            Height: 400
        });
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

	<div>
	<header>
		<nav class="headerMenu">
			<ul>
				<li><button>Lo más visto</button></li>
				<li><button>Edición impresa</button></li>
				<li><button>Quiénes somos</button></li>
				<li class="ultimoItem"><a href="ajax/voluntariado.php" id="popup">Voluntariado</a></li>
			</ul>
		</nav>
		<div class="headerOptions">
			<fieldset>
				<input>
				<button><span class="icon-search"></span></button>
			</fieldset>
			<div class="redesSociales">
				<a class="icon-facebook"></a>
				<a class="icon-twitter"></a>
				<a class="icon-mail"></a>
				<a class="icon-rss"></a>
			</div>
		</div>
		<div class="MundoVilla">
			<div class="headerLogo">
				<figure></figure>
			</div>
			<p class="headerFecha">Buenos Aires, República Argentina - <?php echo DateHelper::stringDate(); ?></p>
		</div>
		<div id="feedClima"></div>
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

	<nav class="menuMovil">
		<a id="menuMovilCategorias"><span class="icon-arrow-right" id="flechaMenu"></span>Menu</a>
		<ul id="menuMovilCategoriasSubmenu" class="submenu">
			<?php 
				foreach ($sections as $key => $section) {
					if($key == 0) {
						?><a href="<?php echo $section->getLink();?>"><li><?php echo $section->getName() ?></li></a><?php
					}
				}
			?>
		</ul>
	</nav>

	<nav class="menuHeaderMovil">
		<a id="menuMovilSecciones">
			<span class="icon-arrow-right"></span>
			Categorías
		</a>
		<ul id="menuMovilSeccionesSubmenu" class="submenu">
			<li>Lo más visto</li>
			<li>Edición impresa</li>
			<li>Quiénes somos</li>
			<li>Voluntariado</li>
		</ul>
	</nav>