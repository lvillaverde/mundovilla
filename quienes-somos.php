<?php

	require_once "Controller/ArticleController.php";
	require_once "Helpers/SectionsHelper.php";

	$render = ArticleController::getInstance()->articleAction();

	include __DIR__."/View/header.php";

?>

	<section class="sectionNoticia sectionQuienesSomos">
		<h1>¿Quiénes somos?</h1>
		<p>Este proyecto nació siendo un periódico mensual, luego Mundo Villa Tv en la Villa 31 bis de Retiro y en Villa Soldati y Lomas de Zamora, finalmente el presente portal web de información. El equipo de Mundo Villa está compuesto por corresponsales que son referentes activos y jóvenes que llevan adelante la misión de informar lo que sucede en cada uno de los barrios humildes de nuestro país. </p>
		<h2>DEPARTAMENTO EDITORIAL:</h2>
		<p><strong>Director:</strong> Teodoro Pancho Benavídez</p>
		<p><strong>Sub Director:</strong> Julio Zarza</p>
		<p><strong>Editor:</strong> Joaquín Ramos</p>
		<p><strong>Secretario de Redacción:</strong> Sebastián Deferrari</p>
		<br/>
		<p><strong>Correctora:</strong> Soledad Gómez Cantero</p>
		<p><strong>Agrupación Universitaria:</strong> Pilar Carioggia, Dolores Moreno, Leonardo Virgili, </p>
		<p><strong>Relaciones Académicas:</strong> Roberto Elvira Mathez</p>
		<p><strong>Administrador Redes Sociales:</strong> Paula Stiven </p>
		<p><strong>Editor:</strong> Víctor Ramos, SOS Discriminación Internacional</p>
		<p><strong>Website:</strong> www.mundovilla.com</p>
		<p><strong>Edicion mundovilla.com:</strong> Paula Stiven / Joaquin Ramos</p>
		<br/>
		<h2>CORRESPONSALES</h2>
		<p><strong>Villa 21/24 - Barracas:</strong> Matías Gonzalez</p>
		<p><strong>Villa 15 - Ciudad Oculta:</strong> Liliana Barrionuevo</p>
		<p><strong>Piedra Buena:</strong>  Leonardo Virgili</p>
		<p><strong>Villa 31/31bis - Retiro:</strong> Israel Ledezma/ gustavo Lugones</p>
		<p><strong>Villa 20 - Lugano:</strong> Jose Andia</p>
		<p><strong>Villa Lugano I y II:</strong> Susana Yanacón</p>
		<p><strong>Villa 1-11-14 - Bajo Flores:</strong> David Calle</p>
		<p><strong>Villa 3 - Fátima:</strong> Eduardo García</p>
		<p><strong>Villa 6 - Cildañez:</strong> Esperanza Vargas - Jorge Saavedra</p>
		<p><strong>Zabaleta - NHT:</strong> Cristian Sebastían Juarez</p>
		<p><strong>Los Piletones:</strong> Berty Tancara</p>
		<p><strong>Villa Rodrigo Bueno:</strong> Brandon Sosa</p>
		<p><strong>Ramón Carrillo - Soldati:</strong> Ricardo González</p>
		<p><strong>Villa Soldati:</strong> Norma Andia - Diego Benavides</p>
		<p><strong>Zona Norte San Fernando:</strong> Alejandra Bravo</p>
		<p><strong>Villa Itati Quilmes:</strong> Edelmiro Gamarra</p>

	</section>

	<aside class="asideNoticia">
			<div class="modOtro">
				<embed type="application/x-shockwave-flash" src="http://cdn1.worldtv.com/build/2920-07/flash/embed-player-modern.swf" width="100%" style="height:auto;" id="flexApplication" name="flexApplication" bgcolor="#FFFFFF" quality="high" allowscriptaccess="always" movie="http://cdn1.worldtv.com/build/2920-07/flash/embed-player-modern.swf" allowfullscreen="true" flashvars="domain=http%3A%2F%2Fembed.worldtv.com%2F&amp;rootUrlPath=http%3A%2F%2Fembed.worldtv.com%2F&amp;staticRootUrlPath=http%3A%2F%2Fcdn1.worldtv.com%2Fbuild%2F2920-07%2F&amp;channelId=1519525&amp;currentLang=es&amp;buildId=2920-07&amp;vid=&amp;autoPlay=false">
			</div>
			<div class="elementEncuesta">
				<h2>Encuesta</h2>
				<p><?php echo $render['poll']->getText();?></p>
				<fieldset class="encuesta">
					<?php 
					foreach ($render['poll']->getOptions() as $option ) {
						?><input type="radio" name="poll" value="<?php echo $option->getId() ?>" /><label><?php echo $option->getText();?></label><br><?php
					}
					?>
					<button class="encuestaVotar">Votar</button>
					<button class="verResultados">Ver resultados</button>
				</fieldset>
			</div>
			<?php 
				foreach ($render['banners'] as $banner) {
					?>
						<div class="modBanner">
							<img class="elementBanner lazy" style="width:100%" src="<?php echo $banner->getImage() ?>" >
						</div>
					<?php
				}
			?>
	</aside>

<?php
	include __DIR__."/View/footer.php";