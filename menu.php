<?php

$config = json_decode(file_get_contents('config.json'));
$menu = $config->menu;
foreach($menu as $page):
?>

<p>

<a href="javascript:ftc('pages/<?php echo $page; ?>.php' , 'center' );" > <?php echo $page; ?> </a>

<?php endforeach; ?>
