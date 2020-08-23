<?php 
session_start();
$role = $_SESSION['role'];

if($role != 'admin')
{
	header('Location: index.php');
	exit;
}
?>

<h2>
Admin panel
</h2>
