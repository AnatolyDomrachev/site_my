<?php

include 'functions/connect.php';

$mysqli = connect();
$query = "select * from pages;";
$result = $mysqli->query($query) ;
if ( !$result) 
    echo "Не удалось выполнить запрос (" . $mysqli->errno . ") " . $mysqli->error;

while( $row = $result->fetch_assoc()):
?>

<a href = "javascript:ftc('page.php?page=
<?php echo $row['name'] ; ?>
' , 'center' );" > 
<?php echo $row['name'] ; ?>
</a>

<p>

<?php endwhile; ?>


