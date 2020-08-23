<?php if(!isset($_GET['a']) && !isset($_POST['login'])): ?>

<a href="javascript:ftc('login.php?a=set' , 'login' );" > login </a> 

<?php endif; ?>

<?php if(isset($_GET['a']) && !isset($_POST['login'])): ?>

<form action = login.php?a=set>
Login:
<input type=text name = login>
Password:
<input type=password name = password>
<button>GO</button>
<?php endif; ?>

<?php if(isset($_GET['a']) && isset($_POST['login'])): ?>
test login
<?php endif; ?>
