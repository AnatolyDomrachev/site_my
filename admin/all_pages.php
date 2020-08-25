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
include '../functions/all_pages_add_page.php';
include '../functions/all_pages_add_post.php';
session_start();
$role = $_SESSION['role'];

if($role != 'admin')
{
	header('Location: ../index.php');
	exit;
}
?>

<?php 
$type = $_GET['type'];
if($type == 'page')
	all_pages_add_page(0, 0);
if($type == 'post')
	all_pages_add_post(0, 0);
?>

