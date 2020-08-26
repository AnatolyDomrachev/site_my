<h2>
<?php
include 'functions/connect.php';
include 'functions/get_posts.php';

$pid = $_GET['page'];
echo $_GET['name'];
//echo "<pre>";
//print_r($_GET);

?>
</h2>

<?php
echo $_GET['descr'];
get_posts($pid);
?>
