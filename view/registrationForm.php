<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<form class="form-horizontal" role="form" method="POST" action="registrationAnswer">
				<div class="form-group">
					<label class="col-md-4 control-label">Имя</label>
					<div class="col-md-6">
						<input class="form-control" type="text" id="name" name="name" required autofocus>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 control-label">E-mail</label>
					<div class="col-md-6">
						<input class="form-control" type="email" id="email" name="email" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 control-label">Пароль</label>
					<div class="col-md-6">
						<input class="form-control" type="password" id="password" name="password" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 control-label">Повторите пароль</label>
					<div class="col-md-6">
						<input class="form-control" type="password" id="confirm" name="confirm" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-6 col-md-offset-4">
						<button type="submit" class="btn btn-primary" name="save">Зарегистрироваться</button>
					</div>
				</div>
				<p style="padding-top:10px"><a href="./">На сайт</a></p>
			</form>
		</div>
	</div>
</div>