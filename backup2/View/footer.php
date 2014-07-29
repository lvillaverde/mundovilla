</div>
	<footer>
		<figure><img src="img/mundo-villa-footer.png"></figure>
		<nav>
			<ul class="navSitio">
				<?php 
					foreach ($sections as $key => $section) {
						if($key == 0) {
							?><a href="<?php echo $section->getLink();?>"><li><?php echo $section->getName() ?></li></a><?php
						} else {
							?><a href="<?php echo $section->getLink();?>"><li><span>■</span><?php echo $section->getName() ?></li></a><?php
						}
					}
				?>
			</ul>
			<ul class="navVillas">
				<li>Villa 31 - Retiro<span>■</span></li>
				<li>Villa 21 - Barracas<span>■</span></li>
				<li>Rodrigo Bueno<span>■</span></li>
				<li>Villa 20 - Villa Lugano<span>■</span></li>
				<li>Ciudad Oculta</li>
				<li>Villa 1/11/14 Bajo Flores<span>■</span></li><br />
				<li>Villa Soldatti<span>■</span></li>
				<li>Villa 19<span>■</span></li>
				<li>Los Piletones<span>■</span></li>
				<li>La Cava<span>■</span></li>
				<li>Conventillos de La Boca</li>
			</ul>
			<ul class="navRedesSociales">
				<li class="redesTwitter">#mundo_villa</li>
				<li class="redesFacebook">/mundivilla</li>
				<li class="redesEmail">info@mundovilla.com</li>
			</ul>
		</nav>
	</footer>
</body>
</html>
