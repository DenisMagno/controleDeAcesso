<div class="container">
	<!-- Form subscription -->
	<form class="col-md-6 mx-auto mt-5" method="POST" action="<?= base_url('pessoa/login');?>">
		<p class="h5 text-center mb-4">Logar-se</p>

		<div class="md-form">
			<i class="fa fa-user prefix grey-text"></i>
			<input name="login" type="text" id="orangeForm-name" class="form-control">
			<label for="orangeForm-name">Login</label>
		</div>
		
		<div class="md-form">
			<i class="fa fa-lock prefix grey-text"></i>
			<input name="senha" type="password" id="orangeForm-pass" class="form-control">
			<label for="orangeForm-pass">Senha</label>
		</div>

		<div class="form-inline">
			<div class="form-group">

			</div>

			<div class="form-group">
				<input name="tipoPessoa" value="presidente" type="radio" class="with-gap" id="radio1" checked>
				<label for="radio1">Presidente</label>
			</div>

			<div class="form-group">
				<input name="tipoPessoa" value="supervisor" type="radio" class="with-gap" id="radio2">
				<label for="radio2">Supervisor</label>
			</div>

			<div class="form-group">
				<input name="tipoPessoa" value="gerente" type="radio" class="with-gap" id="radio3">
				<label for="radio3">Gerente</label>
			</div>

			<div class="form-group">
				<input name="tipoPessoa" value="colaborador" type="radio" class="with-gap" id="radio4">
				<label for="radio4">Colaborador</label>
			</div>
		</div>

		<div class="text-center">
			<button class="btn btn-deep-orange">Entrar</button>
		</div>
	</form>
	<!-- Form subscription -->
</div>