<?php

class ViewComments{
	public static function commentsFrom(){
		echo "<form action='insertcomment'>
		<input type='hidden' name='id' value='".$_GET['id']."'>
		Ваш комментарий: 
		<input type='text' name='comment'>
		<input type='submit' value='Отправить'>
		</form>";
	}

	public static function commentsByNews($array){
		if (!is_null($array)) {
			echo "<table id='comments'><th>Комментарии</th><th>Дата</th>";
			foreach ($array as $comment) {
				echo "<tr><td>".$comment['text']."</td>";
				echo "<td>".$comment['date']."</td></tr>";
			}
			echo "<table>";
		}
	}

	public static function commentsCountWithAnchor($value){
		if ($value['count']>0)
			echo "<b><a href='#comments'>(".$value['count'].")</a><b>";
	}
	public static function commentsCount($value){
		if ($value['count']>0)
			echo "<b><font color='red'>(".$value['count'].")</font><b>";
	}
}

?>