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
		
		if (!isset($_GET['ac'])) {
			$render::renderTemplate('views/templates/titulo', array('titulo' => 'Autores'));
			$render::renderTemplate('views/templates/container');
			$render::renderTemplate('views/autores');
		}
		else if ($_GET['ac'] == 'novo_autor') {
			$render::renderTemplate('views/templates/titulo', array('titulo' => 'Autores', 'subtitulo' => 'Novo Autor'));
			$render::renderTemplate('views/templates/container');
			$render::renderTemplate('views/novo_autor');
		}
	}
	
	/**
	 * Adiciona um novo autor
	 * @return false Retorna false caso não passe nas validações
	 */
	public function adicionarAutor() {
		$db = new Database();
		$autor = new Autor();
		$render = new Render();
		
		$autor->nome = $_POST['nome'];
		
		// Valida os campos
		if (trim($autor->nome) == '') {
			$render::renderTemplate('views/templates/alerta', array('tipo' => 'danger', 'msg' => 'O campo Nome não pode estar vazio.'));
			return false;
		}
		else if (strlen($autor->nome) > 80) {
			$render::renderTemplate('views/templates/alerta', array('tipo' => 'danger', 'msg' => 'O campo Nome não pode possuir mais que 80 caracteres.'));
			return false;
		}
		
		// Insere no banco de dados
		$autor->insert();
		
		// Redireciona a página
		header("Location: ?page=autores");
	}
}

?>