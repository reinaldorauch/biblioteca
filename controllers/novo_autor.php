<?php
	
require_once('../models/Database.php');

$db = new Database();
$query = 'INSERT INTO autor (nome) VALUES (';
$query .= '\'' . $_POST["nome"] . '\'';
$query .= ');';
$db->query($query);
	
?>