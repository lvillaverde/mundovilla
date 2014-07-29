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
				<?php
					require_once __DIR__."/../Lib/MysqliConnector.php";
					$query = "SELECT * FROM villas where id IN (select villa FROM articles WHERE published = 1)";
					$result = MysqliConnector::getInstance()->select($query);

					while($row = $result->fetch_assoc()) {
						?><li><?php echo $row['Name']?><span>■</span></li><?php
					}

				?>
			</ul>
			<ul class="navRedesSociales">
				<li class="redesTwitter">#mundo_villa</li>
				<li class="redesFacebook">/mundivilla</li>
				<li class="redesEmail">info@mundovilla.com</li>
			</ul>
		</nav>
	</footer>
	<script>
	$(document).ready(function () {
		
		$('.popup').magnificPopup({
			type: 'ajax'
		});
		
	});
	</script>
</body>
</html>
