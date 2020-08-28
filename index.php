<?php 
if(isset($_GET['pid']))
	$pid = $_GET['pid'];
else
       	$pid = 1;
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
  <title>Анатолий Домрачев</title>
  <meta charset="utf-8">
  <link href="style.css" rel="stylesheet">
  </head>
  <body>

<div class = header id = header> </div>
<div class = menu id = menu> </div>
<div class = login id = login> </div>
<div class = center id = center> </div>
<div class = footer id = footer> </div>

<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="ftc.js"></script>

<script>

ftc( 'header.php' , 'header' );
ftc( 'page_menu.php?pid=<?php echo $pid ; ?>', 'menu' );
ftc( 'login.php' , 'login' );
ftc( 'center.php' , 'center' );

</script>

