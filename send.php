<?php

	$html = "Recibiste un mensaje de ".$_POST['nombre'].". Su email es ".$_POST['email']."\n";
	$html .= $_POST['mensaje'];

	mail("info@mundovilla.com", $_POST['asunto'], $html);