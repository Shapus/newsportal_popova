<?php ob_start() ?>

<?php 
	ViewNews::readNews($news);
	echo "<br>";
	Controller::comments($_GET['id']);
	ViewComments::CommentsFrom();
	$content = ob_get_clean();
	include_once 'view/layout.php';
?>