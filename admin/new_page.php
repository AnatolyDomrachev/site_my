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
$mysqli = connect();
$query = "select groups.name from groups, users where users.name = 'admin' and  users.passwd = '1111' and groups.id = group_id;";
$result = $mysqli->query($query) ;

if ( !$result) 
    echo "Не удалось выполнить запрос (" . $mysqli->errno . ") " . $mysqli->error;

$row = $result->fetch_assoc();
print_r( $row);


?>
