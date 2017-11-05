<div class="container-login col-md-5 mx-auto">
	<!-- Form login -->
	<form class="col-md-12 mx-auto" method="POST" action="<?= base_url('pessoa/login');?>">
		<div class="container-titulo special-color">
			<p class="h2 text-center mb-4">Logue-se</p>
		</div>

		<div class="md-form">
			<i class="fa fa-envelope prefix grey-text"></i>
			<input name="login" type="text" id="defaultForm-email" class="form-control" required>
			<label for="defaultForm-email">Login</label>
		</div>

		<div class="md-form">
			<i class="fa fa-lock prefix grey-text"></i>
			<input name="senha" type="password" id="defaultForm-pass" class="form-control" required>
			<label for="defaultForm-pass">Senha</label>
		</div>
		<div class="md-form">
			<i class="fa fa-check-square-o prefix grey-text"></i>
			<h3 class="container-paragrafo grey-text">Selecione o tipo de funcionário:</h3>
		</div>

		<div class="form-inline">
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

		<div class="text-center mt-5">
			<button class="btn special-color">Entrar <i class="fa fa-sign-in" aria-hidden="true"></i></button>
		</div>
	</form>
	<!-- Form login -->

	<p class="red-text text-center"><?php if(isset($erro)){echo $erro;}?></p>
	<p class="red-text text-center"><?php if(isset($mensagem)){echo $mensagem;}?></p>
</div>