<?php
	
require_once('/models/Database.php');
require_once('/models/Autor.php');
require_once('Render.php');
		
class AutorController {
	public function listarAutores() {
		
	}
	
	public function adicionarAutor() {
		$db = new Database();
		$autor = new Autor();
		$render = new Render();
		
		$autor->nome = $_POST["nome"];
		$autor->insert();
	}
}

?>