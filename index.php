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

switch ($page) {
	case 'index':
		$render::renderTemplate('views/templates/header');
		$render::renderTemplate('views/templates/home');
		break;
	case 'livros':
		$render::renderTemplate('views/templates/header', array('titulo' => 'Livros'));
		$render::renderTemplate('views/livros');
		break;
	case 'novo_autor':
		$render::renderTemplate('views/templates/header', array('titulo' => 'Novo Autor'));
		$render::renderTemplate('views/novo_autor');
}

$render::renderTemplate('views/templates/fim');

?>