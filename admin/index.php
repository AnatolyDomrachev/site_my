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
Page name: 
<input type = text name = name>
<p>
Page descr: 
<textarea rows="10" cols="75" name = descr>
</textarea>
<button> GO </button>
</form>


