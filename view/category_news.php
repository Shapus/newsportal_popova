<?php ob_start() ?>

<h1>Новости по категориям</h1>
<br>

<?php 
	ViewNews::getNewsByCategory($array);
	$content = ob_get_clean();
	include_once 'view/layout.php';
?>