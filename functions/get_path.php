<?php 

function get_path($pid, &$path)
{
	$mysqli = connect();

	$query = "select parent_id from pages where id = $pid";
	$result = $mysqli->query($query) ;
	if ( !$result) 
	    echo "Не удалось выполнить запрос (" . $mysqli->errno . ") " . $mysqli->error;

	if(mysqli_affected_rows($mysqli))
	{
		$row = $result->fetch_assoc();
		$ppid = $row['parent_id'] ;
		if($ppid)
			get_path($row['parent_id'] , $path);
	}

	$query = "select name from pages where id = $pid";

	$result = $mysqli->query($query) ;
	if ( !$result) 
	    echo "Не удалось выполнить запрос (" . $mysqli->errno . ") " . $mysqli->error;

	$row = $result->fetch_assoc();
	$path[] = [$row['name'] , $pid];

}

?>


