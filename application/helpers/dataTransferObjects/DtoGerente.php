<?php
	class DtoGerente{
		private $id;
		private $nome;
		private $sobrenome;
		private $login;
		private $senha;
		private $rg;
		private $graduacao;
		private $idSupervisor;

		public function __construct($gerente){
			$this->id = $gerente->getId();
			$this->nome = $gerente->getNome();
			$this->sobrenome = $gerente->getSobrenome();
			$this->login = $gerente->getLogin();
			$this->senha = $gerente->getSenha();
			$this->rg = $gerente->getRg();
			$this->graduacao = $gerente->getGraduacao();
			$this->idSupervisor = $gerente->getIdSupervisor();
		}
	}
?>