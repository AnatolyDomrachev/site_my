<?php include 'functions/check_login.php'; ?>

<?php if(!isset($_GET['a']) && !isset($_POST['login'])): ?>

<a href="javascript:ftc('login.php?a=set' , 'login' );" > login </a> 

<?php endif; ?>

<?php if(isset($_GET['a']) && !isset($_POST['login'])): ?>

<form action = login.php?a=set method = POST>
Login:
<input type=text name = login>
Password:
<input type=password name = password>
<button>GO</button>
<?php endif; ?>

<?php if(isset($_GET['a']) && isset($_POST['login']))
	$status = check_login($_POST['login'], $_POST['password']);
	if(!$status)
		echo "False login or password";
 ?>

