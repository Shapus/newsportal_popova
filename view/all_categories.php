<?php 

echo "<li class='submenuunit'><a href='all'>ВСЕ НОВОСТИ</a></li>";
foreach ($array as $value)
	echo "<li><a href='category?id=".$value['id']."'>".$value['category_name']."</a></li>";

?>