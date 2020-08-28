<?php

foreach (glob("functions/*.php") as $filename) require_once $filename;

$pid = $_GET['pid'];

$mysqli = connect();
$query = "select name, id from pages where parent_id = $pid;";
$result = $mysqli->query($query) ;
if ( !$result) 
    echo "Не удалось выполнить запрос (" . $mysqli->errno . ") " . $mysqli->error;

while( $row = $result->fetch_assoc()):
?>

<a href = "index.php?pid=
<?php echo $row['id'] ; ?>
" > 

<?php echo $row['name'] ; ?>

</a>

<p>

<?php endwhile; ?>


