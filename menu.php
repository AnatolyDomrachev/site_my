<?php

include 'functions/connect.php';

$mysqli = connect();
$query = "select id,name from pages;";
$result = $mysqli->query($query) ;
if ( !$result) 
    echo "Не удалось выполнить запрос (" . $mysqli->errno . ") " . $mysqli->error;

while( $row = $result->fetch_assoc()):
?>

<a href = "javascript:ftc('page.php?id=
<?php echo $row['id'] ; ?>
' , 'center' );

javascript:ftc('page_menu.php?id=
<?php echo $row['id'] ; ?>
' , 'menu' );
" > 

<?php echo $row['name'] ; ?>

</a>

<p>

<?php endwhile; ?>


