<?php

require_once('../controllers/Render.php');

// Determina qual página para mostrar.
if (isset($_GET['page']))
	$page = $_GET['page'];
else
	$page = 'index';
	
// Mostra a página.
$render = new Render();
switch ($page) {
	case 'index':
		$render::renderTemplate('templates/head');
		$render::renderTemplate('templates/header');
		$render::renderTemplate('templates/fim');
}

?>