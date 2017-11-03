<?php
	class DtoColaborador{
		private $id;
		private $nome;
		private $sobrenome;
		private $login;
		private $senha;
		private $rg;
		private $cnh;
		private $idGerente;

		public function __construct($colaborador){
			$this->id = $colaborador->getId();
			$this->nome = $colaborador->getNome();
			$this->sobrenome = $colaborador->getSobrenome();
			$this->login = $colaborador->getLogin();
			$this->senha = $colaborador->getSenha();
			$this->rg = $colaborador->getRg();
			$this->cnh = $colaborador->getCnh();
			$this->idGerente = $colaborador->getIdGerente();
		}
	}
?>