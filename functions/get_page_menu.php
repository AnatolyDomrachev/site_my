<?php

function get_page_menu($pid)
{

?>

<?php

	$mysqli = connect();
	$query = "select * from pages where parent_id = $pid";
	$result = $mysqli->query($query) ;
	if ( !$result) 
	    echo "Не удалось выполнить запрос (" . $mysqli->errno . ") " . $mysqli->error;
	while( $row = $result->fetch_assoc()):
	?>

	<a href = "page.php
	?id= <?php echo $row['id'] ; ?>
	&name= <?php echo $row['name'] ; ?>
	&descr= <?php echo $row['descr'] ; ?>
	" >
	<b>
		<?php echo $row['name'] ; ?>
	</b>
	</a>

	<p>


	<?php 
	endwhile;
}
?>
