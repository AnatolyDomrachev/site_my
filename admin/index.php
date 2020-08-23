<?php 
session_start();
$role = $_SESSION['role'];

if($role != 'admin')
{
	header('Location: ../index.php');
	exit;
}
?>

<h2> Admin panel </h2>
<form action = new_page.php method = post>
<input type = text name = page>
<button> GO </button>
</form>


