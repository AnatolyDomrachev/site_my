<?php

foreach (glob("functions/*.php") as $filename) require_once $filename;

?>
<h2>
<?php echo $_GET['name']; ?>
</h2>

<?php
echo $_GET['descr'];
?>
