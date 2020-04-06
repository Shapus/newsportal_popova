<?php
class ViewNews{
	public static function getNewsByCategory($array){
		foreach ($array as $value) {
			echo "<img src='data:image/jpeg;base64,".base64_encode($value['image'])."' style='width:150px'>";
			echo "<h2>".$value['title']." </h2>";
			Controller::commentsCount($value['id']);
			echo "<a href='news?id=".$value['id']."'>Подробнее</a>";
			echo "<br><br>";
		}
	}

	public static function getAllNews($array){
		foreach ($array as $value) {
			echo "<h2>".$value['title']."</h2>";
			Controller::commentsCount($value['id']);
			echo "<img src='data:image/jpeg;base64,".base64_encode($value['image'])."' style='width:150px'>";
			echo "<a href='news?id=".$value['id']."'>Подробнее</a>";
			echo "<br><br>";
		}
	}

	public static function readNews($news){
		echo "<h2>".$news['title']."</h2>";
		echo "<br>";
		Controller::commentsCountWithAnchor($news['id']);
		echo "<img src='data:image/jpeg;base64,".base64_encode($news['image'])."' style='width:150px'>";
		echo "<br>";
		echo "<p>".$news['text']."</p>";
	}
}
?>