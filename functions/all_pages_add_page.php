<?php 

function all_pages_add_page($ppid, $tab)
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
	<a href = "add_page.php?page=<?php echo $row['id'] ; ?>" >
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
	all_pages_add_page($pid, $tab + 10);
	endwhile;
}
?>
