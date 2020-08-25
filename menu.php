<?php

include 'functions/connect.php';

$mysqli = connect();
$query = "select * from pages;";
$result = $mysqli->query($query) ;
if ( !$result) 
    echo "Не удалось выполнить запрос (" . $mysqli->errno . ") " . $mysqli->error;

while( $row = $result->fetch_assoc()):
?>

<?php echo $row['name']."\n" ; ?>
<p>

<?php endwhile; ?>


