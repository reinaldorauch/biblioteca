<?php
	
require_once('../models/Database.php');
require_once('../models/Autor.php');

$db = new Database();
$autor = new Autor();

$autor->nome = $_POST["nome"];
$autor->insert();
	
?>