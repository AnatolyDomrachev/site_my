<?php

foreach (glob("functions/*.php") as $filename) require_once $filename;

$pid = $_GET['id'];
get_page_menu($pid);
?>
