<?php ob_start() ?>
<h1>ПЕРВЫЕ 3 НОВОСТИ</h1>
<br>

<?php 
	ViewNews::getNewsByCategory($array);
	$content = ob_get_clean();
	include_once 'view/layout.php';
?>