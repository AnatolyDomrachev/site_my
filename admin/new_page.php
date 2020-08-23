<?php 
session_start();
$role = $_SESSION['role'];

if($role != 'admin')
{
	header('Location: ../index.php');
	exit;
}
?>

<?php 
include '../functions/connect.php';
$name = $_POST['name'];
$descr = $_POST['descr'];
$mysqli = connect();
$query = "insert into pages (name, descr) values ('$name', '$descr');";
$result = $mysqli->query($query) ;

if ( !$result) 
    echo "Не удалось выполнить запрос (" . $mysqli->errno . ") " . $mysqli->error;
?>
