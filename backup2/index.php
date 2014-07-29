<?php

	require_once "Controller/HomeController.php";
	require_once "Helpers/SectionsHelper.php";

	$render = HomeController::getInstance()->homeAction();

	include __DIR__."/View/header.php";

?>	
	<section>
		<div class="noticiasPrincipales">
			<!-- <div class="linea2">
				<article class="mod3col">
					<h2 class="ultimoMomento">Último momento</h2>
					<figure>
						<img src="http://mundovilla.com/uploads/854423531.0.jpg">
					</figure>
					<h3>Recapturaron al asesino de nuestro compañero Adams Ledezma, fundador de Mundo Villa TV</h3>
					<p>Cristian Cristaldo Espíndola (22) fue recapturado por la Policía Bonaerense en la Municipalidad de Lanús. El año pasado había sido condenado por el asesinato  de nuestro compañero y fundador del primer canal villero Mundo Villa TV, Adams Ledezma.</p>
					<button><span class="icon-arrow-new"></span></button>
				</article>
			</div> -->
			<div class="linea1">
				<a href="<?php echo $render['doubleColumn']->getLink();?>">
					<article class="noticiaPrincipal mod2col" id="noticia1">
						<h2 class="ultimoMomento">Último momento</h2>
						<figure>
							<img class="lazy" src="http://mundovilla.com/uploads/<?php echo $render['doubleColumn']->getImage()->getUrl();?>" />
						</figure>
						<span class="epigrafe">Comentario</span>
						<h3><?php echo $render['doubleColumn']->getTitle();?></h3>
						<p><?php echo $render['doubleColumn']->getPreview();?></p>
						<button><span class="icon-arrow-new"></span></button>
					</article>
				</a>
				<article class="noticiaPrincipal mod1col" id="noticia2">
					<h2 class="ultimoMomento">Último momento</h2>
					<figure>
						<img class="lazy" src="http://www.mundovilla.com/uploads/2066548241.0.jpg" />
					</figure>
					<span class="epigrafe">Comentario</span>
					<h3>Elecciones 2013: ¿Qué pasó con las PASO?</h3>
					<p>Carlos García dio su versión de lo sucedido en los momentos previos a la explosión: aseguró que en su celular tiene registradas...</p>
					<button><span class="icon-arrow-new"></span></button>
				</article>
			</div>
		</div>
		<div class="noticiasSecundarias" id="grillado">
			<div class="grid-sizer"></div>
			<div class="modElement modOtro">
				<embed type="application/x-shockwave-flash" src="http://cdn1.worldtv.com/build/2920-07/flash/embed-player-modern.swf" width="100%" style="height:auto;" id="flexApplication" name="flexApplication" bgcolor="#FFFFFF" quality="high" allowscriptaccess="always" movie="http://cdn1.worldtv.com/build/2920-07/flash/embed-player-modern.swf" allowfullscreen="true" flashvars="domain=http%3A%2F%2Fembed.worldtv.com%2F&amp;rootUrlPath=http%3A%2F%2Fembed.worldtv.com%2F&amp;staticRootUrlPath=http%3A%2F%2Fcdn1.worldtv.com%2Fbuild%2F2920-07%2F&amp;channelId=1519525&amp;currentLang=es&amp;buildId=2920-07&amp;vid=&amp;autoPlay=false">
			</div>

			<?php 

			foreach ($render['lastArticles'] as $article) {
				?>
					<a href="<?php echo $article->getLink();?>">
						<div class="modElement">
							<div class="elementNoticia">
							<h2><?php echo $article->getTitle();?></h2>
							<figure>
								<span class="span<?php echo SectionsHelper::getSectionName($article->getSection())?>"><?php echo SectionsHelper::getSectionName($article->getSection())?></span>
								<img src="http://mundovilla.com/uploads/<?php echo $article->getImage()->getUrl(); ?>" />
							</figure>
							<p><?php echo $article->getPreview();?></p>
							<button><span class="icon-arrow-new"></span></button>
							</div>
						</div>
					</a>
				<?php
			}

			?>
			<!-- <div class="modElement">
				<div class="modBanner">
					<img class="elementBanner lazy" style="display:inline-block; width:100%" src="img/banners/defensoria.png" >
				</div>
			</div> -->
		</div>
	</section>

<?php
	include __DIR__."/View/footer.php";