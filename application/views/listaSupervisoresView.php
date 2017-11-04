<p class="text-center h2 mt-5"><?=$titulo?></p>

<div class="">
	<div class="list-group">
		<?php if(!empty($supervisores)){foreach($supervisores as $key => $value){ ?>
		<a href="#" class="list-group-item list-group-item-action flex-column align-items-start mt-3 col-md-6 mx-auto">
			<div class="d-flex w-100 justify-content-between">
				<h5 class="mb-1 h3"><?=$supervisores[$key]['nome']?> <?=$supervisores[$key]['sobrenome']?></h5>
				<small>Login: <?=$supervisores[$key]['login']?></small>
			</div>
		
			<p class="mb-1">Graduação: <?=$supervisores[$key]['graduacao']?></p>
			<p class="mb-1">Especialização: <?=$supervisores[$key]['especializacao']?></p>
			<p class="mb-1">Número do RG: <?=$supervisores[$key]['rg']?></p>
			<p class="mt-3 h5">Gerentes em sua hierarquia:</p>

			<ul class="list-group">
				<?php if(!empty($supervisores[$key]['gerentes'])){foreach($supervisores[$key]['gerentes'] as $id => $value){ ?>
					<li class="list-group-item">
							<small class="mb-1 h5"><?=$supervisores[$key]['gerentes'][$id]['nome']?><?=$supervisores[$key]['gerentes'][$id]['sobrenome']?></small></br>
							<small class="mb-1">Graduação: <?=$supervisores[$key]['gerentes'][$id]['graduacao']?></small></br>
							<small class="mb-1">Número do RG: <?=$supervisores[$key]['gerentes'][$id]['rg']?></small></br>
							<small class="mb-1 h6"><p class="mt-3">Colaboradores em sua hierarquia:</small>

						<ul class="list-group">
							<?php if(!empty($supervisores[$key]['gerentes'][$id]['colaboradores'])){foreach($supervisores[$key]['gerentes'][$id]['colaboradores'] as $ident => $value){ ?>
								<li class="list-group-item">
									<small class="h6"><?=$supervisores[$key]['gerentes'][$id]['colaboradores'][$ident]['nome']?> <?=$supervisores[$key]['gerentes'][$id]['colaboradores'][$ident]['sobrenome']?></small></br>
									<small class="">Númedo da CNH: <?=$supervisores[$key]['gerentes'][$id]['colaboradores'][$ident]['cnh']?></small></br>
									<small class="">Númedo do RG: <?=$supervisores[$key]['gerentes'][$id]['colaboradores'][$ident]['rg']?></small>
								</li>
							<?php }}else{echo"Não há!";}?>
						</ul>
					</li>
				<?php }}else{echo"Não há!";}?>
			</ul>

		</a>

		<?php }}else{echo"Não há!";}?>
	</div>
</div>