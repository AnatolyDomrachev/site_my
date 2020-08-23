<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
  <title>Анатолий Домрачев</title>
  <meta charset="utf-8">
  <link href="style.css" rel="stylesheet">
  </head>
  <body>

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


