<?php
	include APPPATH . 'Pessoa.php';

	class Presidente extends Pessoa{
		private $setor;

		/** Get's e set's **/

		//SETOR
		public function getSetor(){
			return $this->setor
		}

		public function setSetor($setor){
			$this->setor = $setor;
		}
	}
?>