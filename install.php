<?php
include 'functions/connect.php';

$config = json_decode(file_get_contents('config.json'));

$mysqli = connect();

$tables = ((array)$config->mysql->tables);

foreach ($tables as $table => $cols)
{
	$drop = "drop table $table ;";
	$create = "create table if not exists $table ";
	$create .= "( id INT AUTO_INCREMENT PRIMARY KEY  \n ";
	echo "$table\n";
	foreach ($cols as $col)
		$create .= ", $col longblob  \n ";

	$create .= ") ; \n ";
	echo $create;

	if ( !$mysqli->query($drop) ) {
	    echo "Не удалось drop таблицу: (" . $mysqli->errno . ") " . $mysqli->error;
	}
	else
	    echo "Удалось drop таблицу\n" ;

	echo"\n\n";

	if ( !$mysqli->query($create) ) {
	    echo "Не удалось создать таблицу: (" . $mysqli->errno . ") " . $mysqli->error;
	}
	else
	    echo "Удалось создать таблицу\n" ;

	echo"\n\n";
}

$querys[] = "insert into groups (name) values ('admin')";
$querys[] = "insert into users (name,group_id,passwd) select 'admin' , id , '1111' from groups where name = 'admin'";
$querys[] = "insert into pages ( name, parent_id, descr) values ( 'index', '0', 'index');";

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
