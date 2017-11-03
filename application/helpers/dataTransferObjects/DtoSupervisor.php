<?php
	class DtoSupervisor{
		private $id;
		private $nome;
		private $sobrenome;
		private $login;
		private $senha;
		private $rg;
		private $graduacao;
		private $especializacao;
		private $idPresidente;

		public function __construct($supervisor){
			$this->id = $supervisor->getId();
			$this->nome = $supervisor->getNome();
			$this->sobrenome = $supervisor->getSobrenome();
			$this->login = $supervisor->getLogin();
			$this->senha = $supervisor->getSenha();
			$this->rg = $supervisor->getRg();
			$this->graduacao = $supervisor->getGraduacao();
			$this->especializacao = $supervisor->getEspecializacao();
			$this->idPresidente = $supervisor->getIdPresidente();
		}
	}
?>