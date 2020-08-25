<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
  <title>Анатолий Домрачев</title>
  <meta charset="utf-8">
  <link href="../style.css" rel="stylesheet">
  </head>
  <body>

<h2>
Выберите родителькую страницу
</h2>

<?php 
include '../functions/connect.php';
include '../functions/all_pages.php';
session_start();
$role = $_SESSION['role'];

if($role != 'admin')
{
	header('Location: ../index.php');
	exit;
}
?>

<?php 

all_pages(0, 0);

?>

