<?php ob_start();
$control = Registration::registrationUser();
if(isset($control)){
	if($control[0]){
	?>
		<div class="container">
			<div class="alert alerrt-info">
				<strong>Пользователь успешно зарегистрирован!</strong>
			</div>
		</div>
	<?php
	}
	elseif(!$control[0]){
	?>
		<div class="container">
			<div class="alert alerrt-info">
				<strong>Ошибка при регистрации!<br></strong><?php echo $control[1]; ?><a href="registrationForm">Форма регистрации</a>
			</div>
		</div>
	<?php
	}
}
?>
<?php $content = ob_get_clean() ?>
<?php include 'view/layout.php' ?>

