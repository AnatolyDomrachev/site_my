<?php
include 'functions/connect.php';

$config = json_decode(file_get_contents('config.json'));

$mysqli = connect();

$tables = ((array)$config->mysql->tables);
$size = ((array)$config->mysql->col_size);

foreach ($tables as $table => $cols)
{
	$create = "create table if not exists $table ";
	$create .= "( id INT AUTO_INCREMENT PRIMARY KEY  \n ";
	echo "$table\n";
	foreach ($cols as $col)
	{
		if($col == 'descr')
			$c_size = $size[1];
		else
			$c_size = $size[0];

		$create .= ", $col varchar($c_size)  \n ";
	}

	$create .= ") ; \n ";
	echo $create;

	if ( !$mysqli->query($create) ) {
	    echo "Не удалось создать таблицу: (" . $mysqli->errno . ") " . $mysqli->error;
	}
	else
	    echo "Удалось создать таблицу\n" ;

	echo"\n\n\n";
}

$querys[] = "insert into groups (name) values ('admin')";
$querys[] = "insert into users (name,group_id,passwd) select 'admin' , id , '1111' from groups where name = 'admin'";

foreach ($querys as $query)
{
	print_r($query);

	if ( !$mysqli->query($query) ) {
	    echo "Не удалось создать таблицу: (" . $mysqli->errno . ") " . $mysqli->error;
	}
	else
	    echo "Удалось создать таблицу\n" ;

	echo"\n\n\n";
}
	 
?>
