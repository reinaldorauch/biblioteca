<?php

class Database {
	// A conexão com o banco de dados
	protected static $connection;
	
	/**
	 * Conecta com o banco de dados
	 * @return mysqli|bool Instância do MySQLi, false quando erro
	 */
	public function connect() {
		// Conecta no banco de dados
		if (!isset(self::$connection)) {
			$config = parse_ini_file('../config/db.ini'); // Carrega as configurações do arquivo
			self::$connection = new mysqli('localhost', $config['username'], $config['password'], $config['dbname']);
        }
		
		// Se a conexão não foi bem sucedida
		if (self::$connection === false) {
        	return false;
        }
		
		return self::$connection;
	}
	
	/**
	 * Executa uma query no banco de dados
	 * @param string $query String contendo a query
	 * @return mixed O resultado da query
	 */
	public function query($query) {
		// Conecta com o banco de dados
		$connection = $this->connect();
		
		// Executa a query
		$result = $connection->query($query);
		
		return $result;
	}
	
}

?>