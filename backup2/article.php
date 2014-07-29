<?php

	require_once "Controller/ArticleController.php";
	require_once "Helpers/SectionsHelper.php";

	$render = ArticleController::getInstance()->articleAction();

	include __DIR__."/View/header.php";

?>

	<section class="sectionNoticia">
		<span>Sociedad > Villa 21 Barracas </span>
		<h1><?php echo $render['article']->getTitle(); ?></h1>
		<h2><?php echo $render['article']->getPreview(); ?></h2>
		<div class="flexslider">
		  <ul class="slides">
		    <li>
		      <img src="http://mundovilla.com/uploads/<?php echo $render['article']->getImage()->getUrl(); ?>" />
		    </li>
		    <li>
		      <img src="http://mundovilla.com/uploads/1350798227.0.jpg" />
		    </li>
		    <li>
		      <img src="http://cdn01.ib.infobae.com/adjuntos/162/imagenes/011/250/0011250018.jpg" />
		    </li>
		    <li>
		      <img src="http://mundovilla.com/uploads/351525864.0.jpg" />
		    </li>
		  </ul>
		</div> <!--
		<figure><img src="http://mundovilla.com/uploads/<?php echo $render['article']->getImage()->getUrl(); ?>" /><span>¿Bajar la imputabilidad?</span></figure> -->
		<?php echo $render['article']->getBody(); ?>
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