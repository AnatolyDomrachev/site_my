<?php

function connect()
{
	$config = json_decode(file_get_contents('config.json'));
	$host = $config->mysql->host;
	$user = $config->mysql->user;
	$password = $config->mysql->passwd;
	$database = $config->mysql->db;

	$mysqli = new mysqli($host, $user, $password, $database);
	if ($mysqli->connect_errno) {
	    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}

	return $mysqli; 
}
?>

