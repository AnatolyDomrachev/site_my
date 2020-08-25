<?php 

function all_pages_add_post($ppid, $tab)
{
	$mysqli = connect();
	$query = "select * from pages where parent_id = $ppid";
	$result = $mysqli->query($query) ;
	if ( !$result) 
	    echo "Не удалось выполнить запрос (" . $mysqli->errno . ") " . $mysqli->error;
	while( $row = $result->fetch_assoc()):
	?>

<div class = 
		<?php echo "p".$tab; ?>
>
	<a href = "add_post.php?page=<?php echo $row['id'] ; ?>" >
	<b>
		<?php echo $row['name'] ; ?>
	</b>
	</a>

	<br>
		<?php echo $row['descr'] ; ?>
	<br>
</div>

	<?php 
	$pid = $row['id'] ; 
	all_pages_add_post($pid, $tab + 10);
	endwhile;
}
?>
