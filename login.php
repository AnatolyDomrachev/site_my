<?php if(!isset($_GET['a'])): ?>

<a href="javascript:ftc('login.php?a=set' , 'login' );" > login </a> 

<?php else 
	if( !isset($_POST['login'])): ?>

<form action = login.php>
Login:
<input type=text name = login>
Password:
<input type=password name = password>

<?php else :?>
test login
<?php endif; ?>
<?php endif; ?>
