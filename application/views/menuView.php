<nav class="navbar navbar-elegant-color justify-content-between">
	<span class="navbar-text h3 orange-text"><?=$titulo?></span>
    <span class="navbar-text white-text">Olá, <?=$nome?> <?=$sobrenome?>!</span>
    <form class="form-inline" method="POST" action="<?= base_url('pessoa/logout');?>">
        <button class="btn btn-outline-warning waves-effect" type="submit">Sair <i class="fa fa-sign-out" aria-hidden="true"></i></button>
    </form>
</nav>