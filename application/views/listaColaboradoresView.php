<p class="text-center h2 mt-5"><?=$titulo?></p>

<div class="col-md-6 mx-auto">
	<div class="list-group">
		<?php if(!empty($colaboradores)){foreach($colaboradores as $key => $value){ ?>
	 	<a href="#" class="list-group-item list-group-item-action flex-column align-items-start mt-3">
			<div class="d-flex w-100 justify-content-between">
				<h5 class="mb-1"><?=$colaboradores[$key]['nome']?> <?=$colaboradores[$key]['sobrenome']?></h5>
				<small>Login: <?=$colaboradores[$key]['login']?></small>
			</div>
		
			<p class="mb-1">Número da CNH: <?=$colaboradores[$key]['cnh']?></p>
			<p class="mb-1">Número do RG: <?=$colaboradores[$key]['rg']?></p>
	 	</a>

	 	<?php }}else{echo"num tem";} ?>
	</div>
</div>