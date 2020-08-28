<h2>

Анатолий Иванович Домрачев

<?php

foreach (glob("functions/*.php") as $filename) require_once $filename;

$pid = $_GET['pid'];
$path = 1;
get_path($path);

print_r($path);

?>
