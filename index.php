gestion form
<?php 

$pieces = explode("wp-content", $file);

$pieces[0];

include($pieces[0]."/wp-content/plugins/gestion_form/php/gestion_form.php");


$form = new gestion_form($pieces[0]);


?>