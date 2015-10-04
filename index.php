<?php

require_once('/controllers/Render.php');

// Determina qual página mostrar
if (isset($_GET['page']))
	$page = $_GET['page'];
else
	$page = 'index';
	
	
// Mostra a página
$render = new Render();

$render::renderTemplate('views/templates/head');
$render::renderTemplate('views/templates/header');

switch ($page) {
	case 'index':
		$render::renderTemplate('views/templates/container');
		$render::renderTemplate('views/templates/home');
		break;
	case 'livros':
		$render::renderTemplate('views/templates/container');
		$render::renderTemplate('views/livros');
		break;
	case 'autores':
		require_once('/controllers/AutorController.php');
		$autorController = new autorController();
		$autorController->showView();
		break;
}

$render::renderTemplate('views/templates/fim');

?>