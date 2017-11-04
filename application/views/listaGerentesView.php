<p class="text-center h2 mt-5"><?=$titulo?></p>

<div class="">
	<div class="list-group">
		<?php if(!empty($gerentes)){foreach($gerentes as $key => $value){ ?>
		<a href="#" class="list-group-item list-group-item-action flex-column align-items-start mt-3 col-md-6 mx-auto">
			<div class="d-flex w-100 justify-content-between">
				<h5 class="mb-1 h3"><?=$gerentes[$key]['nome']?> <?=$gerentes[$key]['sobrenome']?></h5>
				<small>Login: <?=$gerentes[$key]['login']?></small>
			</div>
		
			<p class="mb-1">Graduação: <?=$gerentes[$key]['graduacao']?></p>
			<p class="mb-1">Número do RG: <?=$gerentes[$key]['rg']?></p>

			<h5 class="mt-3 h5">Colaboradores em sua hierarquia:</h5>
			<ul class="list-group">
				<?php if(!empty($gerentes[$key]['colaboradores'])){foreach($gerentes[$key]['colaboradores'] as $id => $value){ ?>
					<li class="list-group-item">
						<small class="mb-1 h6"><?=$gerentes[$key]['colaboradores'][$id]['nome']?> <?=$gerentes[$key]['colaboradores'][$id]['sobrenome']?></small></br>
						<small class="mb-1">RG: <?=$gerentes[$key]['colaboradores'][$id]['rg']?></small></br>
						<small class="mb-1">CNH: <?=$gerentes[$key]['colaboradores'][$id]['cnh']?></small>
					</li>
				<?php }}else{echo"Não há!";}?>
			</ul>
		</a>
		

		<?php }}else{echo"Não há!";}?>
	</div>
</div>