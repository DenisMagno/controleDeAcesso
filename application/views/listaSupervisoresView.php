<p class="text-center h2 mt-5"><?=$titulo?></p>

<div class="col-md-6 mx-auto">
	<div class="list-group">
		<?php if(!empty($supervisores)){foreach($supervisores as $key => $value){ ?>
		<a href="#" class="list-group-item list-group-item-action flex-column align-items-start mt-5">
			<div class="d-flex w-100 justify-content-between">
				<h5 class="mb-1">#<?=$supervisores[$key]['id']?> <?=$supervisores[$key]['nome']?> <?=$supervisores[$key]['sobrenome']?></h5>
				<small>Login: <?=$supervisores[$key]['login']?></small>
			</div>
		
			<p class="mb-1">Graduação: <?=$supervisores[$key]['graduacao']?></p>
			<p class="mb-1">Especialização: <?=$supervisores[$key]['especializacao']?></p>
			<p class="mb-1">Número do RG: <?=$supervisores[$key]['rg']?></p>
			<p class="mb-1">Gerentes em sua hierarquia:</p>

			<?php if(!empty($supervisores[$key]['gerentes'])){foreach($supervisores[$key]['gerentes'] as $id => $value){ ?>
						<p class="mb-1">Nome gerente: <?=$supervisores[$key]['gerentes'][$id]['nome']?></p>
						<p class="mb-1">Colaboradores:</p>
						<?php if(!empty($supervisores[$key]['gerentes'][$id]['colaboradores'])){foreach($supervisores[$key]['gerentes'][$id]['colaboradores'] as $ident => $value){ ?>
							<p class="mb-1">-- Nome Colaborador: <?=$supervisores[$key]['gerentes'][$id]['colaboradores'][$ident]['nome']?></p>
						<?php }}else{echo"num tem";}?>
			<?php }}else{echo"num tem";}?>

		</a>

		<?php }}else{echo"num tem";}?>
	</div>
</div>