<?php
	class DtoPresidente{
		private $id;
		private $nome;
		private $sobrenome;
		private $login;
		private $senha;
		private $rg;
		private $setor;

		public function __construct($presidente){
			$this->id = $presidente->getId();
			$this->nome = $presidente->getNome();
			$this->sobrenome = $presidente->getSobrenome();
			$this->login = $presidente->getLogin();
			$this->senha = $presidente->getSenha();
			$this->rg = $presidente->getRg();
			$this->setor = $presidente->getSetor();
		}
	}
?>