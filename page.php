<h2>
<?php

foreach (glob("functions/*.php") as $filename) require_once $filename;

$pid = $_GET['id'];
echo $_GET['name'];

?>
</h2>

<?php
echo $_GET['descr'];
get_pages($pid);
?>
