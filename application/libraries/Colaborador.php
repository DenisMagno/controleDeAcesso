<?php
	include APPPATH . 'Pessoa.php';
	
	class Colaborador extends Pessoa{
		private $cnh;
		private $idGerente;

		/** Get's e set's **/

		//CNH
		public function getCnh(){
			return $this->cnh
		}

		public function setCnh($cnh){
			$this->cnh = $cnh;
		}

		//ID GERENTE (Relacionamento com gerente)
		public function getIdGerente(){
			return $this->idGerente
		}

		public function setIdGerente($idGerente){
			$this->idGerente = $idGerente;
		}
	}
?>