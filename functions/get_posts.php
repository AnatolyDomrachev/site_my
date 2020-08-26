<?php 

function get_posts($pid)
{
	$mysqli = connect();
	$query = "select * from posts where page_id = $pid";
	$result = $mysqli->query($query) ;
	if ( !$result) 
	    echo "Не удалось выполнить запрос (" . $mysqli->errno . ") " . $mysqli->error;
	while( $row = $result->fetch_assoc()):
	?>

<div class = p10 >

	<a href = "post.php
?id= <?php echo $row['id'] ; ?>
&name= <?php echo $row['name'] ; ?>
&descr= <?php echo $row['descr'] ; ?>
" >
	<b>
		<?php echo $row['name'] ; ?>
	</b>
	</a>

	<br>
		<?php echo $row['descr'] ; ?>
	<br>
</div>

	<?php 
	endwhile;
}
?>
