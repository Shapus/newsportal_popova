<?php ob_start() ?>

<h1>ВСЕ НОВОСТИ</h1>
<br>

<?php 
	ViewNews::getAllNews($array);
	$content = ob_get_clean();
	include_once 'view/layout.php';
?>