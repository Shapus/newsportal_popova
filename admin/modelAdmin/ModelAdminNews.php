<?php

class ModelAdminNews{
	public static function getNewsList(){
		$query = "SELECT news.*, category.category_name, users.name 
		FROM news, category, users 
		WHERE news.category_id = category.id AND
				news.user_id = users.id
		ORDER BY news.id";
		$database = new Database();
		return $database->getAll($query);
	}
	public static function getNewsDetail($id){
		$query = "SELECT news.*,category.category_name,users.name FROM category JOIN news ON news.category_id=category.id JOIN users ON news.user_id=users.id WHERE news.id=".$id;
		$database = new Database();
		return $database->getOne($query);
	}
	public static function getNewsDelete($id){
		$test = false;
		if(isset($_POST['save'])){
			$query = "DELETE FROM news WHERE news.id=".$id;
			$database = new Database();
			$test = $database->executeRun($query);
		}
		return $test;
	}
	public static function getNewsAdd(){
		$test = false;
		if(isset($_POST['save'])){
			if(isset($POST['title']) && isset($POST['text']) && isset($POST['categoryId'])){
				$title = $POST['title'];
				$text = $POST['text'];
				$categoryId = $POST['categoryId'];
				$image = addslashes(file_get_contents($_FILES['picture']['tmp_name']));
				$query = "INSERT INTO news VALUES(NULL,'".$title."','".$text."','".$image."',1,10)";
				$database = new Database();
				$item = $database->executeRun($query);
				if($item==true)
					$test = $true;
			}
		}
		return $test;
	}
	public static function getNewsEdit($id){
		$test = false;
		if(isset($_POST['save'])){
			if(isset($POST['title']) && isset($POST['text']) && isset($POST['categoryId'])){
				$title = $POST['title'];
				$text = $POST['text'];
				$categoryId = $POST['categoryId'];
				$image = $_FILES['picture']['name'];
				if($image != ""){
					$image = addslashes(file_get_contents($_FILES['picture']['tmp_name']));
					$query = "UPDATE news SET title='".$title."',text='".$text."',image='".$image."',category_id=".$categoryId." WHERE news.id=".$id;
				}	
				else{
					$query = "UPDATE news SET title='".$title."',text='".$text."',category_id=".$categoryId." WHERE news.id=".$id;
				}							
				$database = new Database();
				$item = $database->executeRun($query);
				if($item==true)
					$test = $true;
			}
		}
		return $test;
	}
}

?>