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
$parent = trim($_POST['parent']);
echo "---".$parent."---"; 

echo $descr;
echo "<p>";

$mysqli = connect();
$query = "insert into posts (name, descr, page_id ) values ( '$name', '$descr', $parent);";
echo $query . "\n";
$result = $mysqli->query($query) ;

if ( !$result) 
    echo "Не удалось выполнить запрос \n" .$query ." (" . $mysqli->errno . ") " . $mysqli->error;
?>
