<?php
	
require_once('/models/Database.php');
require_once('/models/Autor.php');
require_once('Render.php');
		
class AutorController {
	/**
	 * Carrega a view
	 */
	public function showView() {
		$render = new Render();
		
		render::renderTemplate('views/templates/titulo.php', array('titulo' => 'Autores'));
			render::renderTemplate('views/autores');
		if (!isset($_GET['ac'])) {
			render::renderTemplate('views/templates/titulo.php', array('titulo' => 'Autores'));
			render::renderTemplate('views/autores');
		}
		else if ($_GET['ac'] == 'novo_autor') {
			render::renderTemplate('views/templates/titulo.php', array('titulo' => 'Novo Autor'));
			render::renderTemplate('views/novo_autor');
		}
	}
	
	/**
	 * Adiciona um novo autor
	 * 
	 */
	public function adicionarAutor() {
		$db = new Database();
		$autor = new Autor();
		$render = new Render();
		
		$autor->nome = $_POST['nome'];
		$autor->insert();
		
		header("Location: ?page=autores");
	}
}

?>