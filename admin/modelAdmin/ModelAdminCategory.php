<?php

class ModelAdminCategory{

	public static function getCategoryList(){
		$query = "SELECT * FROM category ORDER BY category_name ASC";
		$database = new Database();
		return $database->getAll($query);
	}
}

?>