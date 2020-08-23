<?php 
include 'functions/check_login.php';
session_start();
$role = $_SESSION['role'];
?>

<?php if(!$role && !isset($_GET['a']) && !isset($_POST['login'])): ?>

<a href="javascript:ftc('login.php?a=set' , 'login' );" > login </a> 

<?php endif; ?>

<?php if(!$role && isset($_GET['a']) && !isset($_POST['login'])): ?>

<form action = login.php?a=set method = POST>
Login:
<input type=text name = login>
Password:
<input type=password name = password>
<button>GO</button>
<?php endif; ?>

<?php 
if(!$role && isset($_GET['a']) && isset($_POST['login']))
{
	$status = check_login($_POST['login'], $_POST['password']);

	if($status)
		$_SESSION['role'] = $status;
	if(!$status) : ?>
		<script> alert("Wrong password"); </script>
	<?php endif; 
}
?>

<?php 
if($_SESSION['role'])
{
	$role = $_SESSION['role'];
	echo "role: $role";
?>
<a href = admin> admin panel </a>
<?php 
}
?>

