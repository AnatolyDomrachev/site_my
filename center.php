<?php

foreach (glob("functions/*.php") as $filename) require_once $filename;

$pid = $_GET['pid'];

$mysqli = connect();
$query = "select name, descr from pages where id = $pid;";
$result = $mysqli->query($query) ;
if ( !$result) 
    echo "Не удалось выполнить запрос (" . $mysqli->errno . ") " . $mysqli->error;

$row = $result->fetch_assoc();
?>

<h2>
<?php echo $row['name'] ; ?>
</h2>

<?php echo $row['descr'] ; ?>


