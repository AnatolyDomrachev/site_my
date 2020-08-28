
<?php

foreach (glob("functions/*.php") as $filename) require_once $filename;

$pid = $_GET['pid'];
//$pid = 4;
$path = [];
get_path($pid, $path);

//print_r($path);

foreach($path as $string):
?>

<a href = index.php?pid=<?php echo $string[1] ; ?>> <?php echo $string[0] ; ?> / </a>

<?php endforeach; ?>

