<a href = .>Главная</a>
<p>

<?php

foreach (glob("functions/*.php") as $filename) require_once $filename;

$pid = $_GET['id'];

$mysqli = connect();
$query = "select name, id from pages where parent_id = $pid;";
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


