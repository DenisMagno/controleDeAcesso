<?php
	include APPPATH . 'Pessoa.php';
	
	class Gerente extends Pessoa{
		private $graduacao;
		private $idSupervisor;

		/** Get's e set's **/

		//GRADUAÇÃO
		public function getGraduacao(){
			return $this->graduacao
		}

		public function setGraduacao($graduacao){
			$this->graduacao = $graduacao;
		}

		//ID SUPERVISOR (Relacionamento com supervisor)
		public function getIdSupervisor(){
			return $this->idSupervisor
		}

		public function setIdSupervisor($idSupervisor){
			$this->idSupervisor = $idSupervisor;
		}
	}
?>