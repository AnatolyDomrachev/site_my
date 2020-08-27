<?php

function no_children($pid)
{
	$mysqli = connect();
	$query = "select * from pages;";
	$result = $mysqli->query($query) ;
	if ( !$result) 
	echo "Не удалось выполнить запрос (" . $mysqli->errno . ") " . $mysqli->error;

	return !mysqli_affected_rows($mysqli);
}




