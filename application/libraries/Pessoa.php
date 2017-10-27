<?php
	abstract class Pessoa{
		private $id;
		private $nome;
		private $sobrenome;
		private $login
		private $senha;
		private $rg;

		/** Get's e set's **/

		//ID
		public function getId(){
			return $this->id
		}

		//NOME
		public function getNome(){
			return $this->nome;
		}
		public function setNome($nome){
			$this->nome = $nome;
		}

		//SOBRENOME
		public function getSobrenome(){
			return $this->sobrenome;
		}
		public function setSobrenome($sobrenome){
			$this->sobrenome = $sobrenome;
		}

		//LOGIN
		public function getLogin(){
			return $this->login;
		}
		public function setLogin($login){
			$this->login = $login;
		}

		//SENHA
		public function getSenha(){
			return $this->senha;
		}
		public function setSenha($senha){
			$this->senha = $senha;
		}

		//RG
		public function getRg(){
			return $this->rg
		}
		public function setRg($rg){
			$this->rg = $rg;
		}
	}
?>