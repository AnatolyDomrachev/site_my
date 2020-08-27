<?php

foreach (glob("functions/*.php") as $filename) require_once $filename;

//$pid = $_GET['id'];
$pid = 4;

$mysqli = connect();
$query = "select * from pages where id = $pid";
$result = $mysqli->query($query) ;
if ( !$result) 
    echo "Не удалось выполнить запрос (" . $mysqli->errno . ") " . $mysqli->error;
$row = $result->fetch_assoc();

?>
<h2>
<?php echo $row['name']; ?>
</h2>

<?php
echo $row['descr'];
?>
