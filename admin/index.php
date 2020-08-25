<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
  <title>Анатолий Домрачев</title>
  <meta charset="utf-8">
  <link href="style.css" rel="stylesheet">
  </head>
  <body>

<script type="text/javascript" src="../jquery.min.js"></script>
<script type="text/javascript" src="../ftc.js"></script>

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

<a href="javascript:ftc('add_page.php' , 'add_page' );" > add_page</a>
<div id = add_page></div>
<p>
<a href="javascript:ftc('add_post.php' , 'add_post' );" > add_post</a>
<div id = add_post></div>


