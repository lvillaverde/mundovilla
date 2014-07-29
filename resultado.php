<?php

	require_once "Controller/ArticleController.php";
	require_once "Helpers/SectionsHelper.php";



	include __DIR__."/View/header.php";

?>
	<script>

	$(document).ready(function () {

		$('body div header').addClass('headerSeccionNoticia');

	});

	</script>

	<div class="headerNoticia">
		<h1>Resultados de búsqueda de: "Piletones":</h1>
	</div>
	
	<section class="sectionNoticia">
		<a class="resultadoBusqueda">
			<span>26 de junio de 2014 | Urbanización > Los Piletones</span>
			<h2>Barrio Los Piletones: cuando hay voluntad política los recursos aparecen</h2>
			<p>La Junta Vecinal a traves de Monica Ruejas, Espacio Público y el área del Emuy lograron unificar la necesidad de los vecinos y con voluntad política y dialogo lograron pavimentar la calle de las manzanas 9 y 10 del barrrio Los Piletones.<br />
				Despues de muchos reclamos y posturas adversas finalmente aparecieron los recursos necesarios para las obras que ya habían sido prometidas para el barrio.</p>
		</a>
		<a class="resultadoBusqueda">
			<span>29 de mayo de 2014 | Salud > Villa 31 - Retiro </span>
			<h2>Los Piletones: cuando la solución se convierte en problema</h2>
			<p>Buenos Aires 29 de Mayo de 2014 -  El barrio Los Piletones rodeado por el lago Soladi otra vez se encuentra en riesgo sanitario, no solo por la contaminación del lago, sino tambien por las "soluciones" del gobierno porteño que acarrean mas riesgos para los vecinos, especialmente de la manzana 9 y 10.</p>
		</a>
		<a class="resultadoBusqueda">
			<span>14 de abril de 2014 | Salud > Los Piletones</span>
			<h2>Jornada de limpieza en el barrio Los Piletones</h2>
			<p>Buenos Aires 14 de Abril de 2014 - Se realizó la jornada de limpieza en el barrio Monica Ruejas y la Junta  Vecinal encabezaron esta propuesta para la concientización de los vecinos respecto de la limpieza del barrio. A pesar del frío los vevcios se reunieron en el Centro Comunitario Jorge Abelardo Ramos punto de encuentro para dar inicio de esta iniciativa vecinal. Las manzana 9 y 10 son las más afectas con el tema de contaminación ya que se encuentra dentro del lago soldati lleno de malezas y basura, que cada ves que llueve se inundan de residuos y ratas.</p>
		</a>
		<a class="resultadoBusqueda">
			<span>11 de febrero de 2014 | Urbanización > Los Piletones</span>
			<h2>Los Piletones: Corte en la AU Dellepiane en reclamo por soluciones urgentes</h2>
			<p>Buenos Aires 11 de Febrero de 2014 -  La protesta en el barrio Los Piletones continuará despues de no haber podido acordar con las autoridades del Gobierno de la Ciudad la resolución a la grave situación que se vive en el barrio. Las manzanas 9 y 10 están colapsadas por el agua contaminada del Lago Soldati. Las intensas lluvias complicaron aún mas la situación y la rotura de un caño maestro que se viene denunciando hace casi dos meses colmaron la paciencia de los vecinos. Ayer cortaron la AU Dellepiane por la falta de respuestas yse preveé que volveran a cortar la autopista.</p>
		</a>
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