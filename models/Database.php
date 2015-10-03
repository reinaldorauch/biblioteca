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
	
	/**
	 * Insere aspas na string e trata caracteres especiais
	 * @param string $val String para ser tratada
	 * @return string String tratada
	 */
	public function quote($val) {
		$connection = $this->connect();
		
		return "'" . $connection->real_escape_string($val) . "'";
	}
	
	/**
	 * Insere no banco de dados
	 * @param string $table Tabela do banco de dados
	 * @param array $data Colunas e valores da inserção
	 * @return mixed O resultado da query
	 */
	public function insert($table, $data = []) {
		$connection = $this->connect();
		
		// Último valor do array
		$last_key = end(array_keys($data));
		
		// Constrói a query
		$query = 'INSERT INTO ' . $table . ' SET ';
		foreach ($data as $key => $val) {	
			$query .= $key . ' = ' . $val;
			// Insere uma vírgula se não for o último elemento
			if (!$key === $last_key)
				$query .= ', ';
		}
		
		// Insere
		return $this->query($query);
	}
	
}

?>