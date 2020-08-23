<?php

include 'functions/connect.php';

function check_login($login , $password)
{
	$mysqli = connect();
	$query = "select groups.name from groups, users where users.name = '$login' and  users.passwd = '$password' and groups.id = group_id;";
	$result = $mysqli->query($query) ;
	if ( !$result) 
	    echo "Не удалось выполнить запрос (" . $mysqli->errno . ") " . $mysqli->error;

	$row = $result->fetch_assoc();

		return $row['name'] ;
}

?>



