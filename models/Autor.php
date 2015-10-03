<?php

require_once('Database.php');

class Autor {
	public $id_autor;
	public $nome;
	
	/**
	 * Insere um autor no banco de dados
	 * @return mixed O resultado da query
	 */
	public function insert() {
		$db = new Database;
		
		$data = [];
		
		if (!empty($thios->id_autor))
			$data["id_autor"] = (int) $this->id_autor;
		if (!empty($this->nome))
			$data["nome"] = $db->quote($this->nome);
			
		return $db->insert('autor', $data);
	}
	
}

?>