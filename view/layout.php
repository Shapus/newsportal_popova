<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>NEWSPORTAL</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts/googleapis.com/css?family=Noto+Serif">
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="login.css">
	<link rel="stylesheet" href="mystyle.css">
</head>
<body>
	<nav class="one">
		<ul class="topmenu">
			<li><a href="#">Категории<i class="fa fa-angle-down"></i></a>
				<ul class="submenu">
					<?php Controller::getAllCategory() ?>
				</ul>
			</li>
			<li><a href="testError">Инфо</a></li>
			<li><a href="./">Главная</a></li>
			<li><a href="registrationForm">Регистрация</a></li>
			<li><a href="admin/login">Вход</a></li>
		</ul>
	</nav>
	<section>
		<div class="divBox">
			<?php 
				if(isset($content))
					echo $content;
				else
					echo "<h1>Ups, no content!</h1>";
			?>
		</div>
	</section>
	<hr>
	<p style="display: block; text-align: center;">JKTVR19 2020</p>
</body>
</html>