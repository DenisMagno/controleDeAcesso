<?php
	include_once APPPATH . 'libraries/Pessoa.php';
	include_once APPPATH . 'helpers/dataTransferObjects/DtoGerente.php';
	
	class Gerente extends Pessoa{
		private $graduacao;
		private $idSupervisor;

		/** Get's e set's **/

		//GRADUAÇÃO
		public function getGraduacao(){
			return $this->graduacao;
		}

		public function setGraduacao($graduacao){
			$this->graduacao = $graduacao;
		}

		//ID SUPERVISOR (Relacionamento com supervisor)
		public function getIdSupervisor(){
			return $this->idSupervisor;
		}

		public function setIdSupervisor($idSupervisor){
			$this->idSupervisor = $idSupervisor;
		}

		public function login(){
			$sql = "SELECT * FROM pessoa WHERE login = ? AND senha = ?";
			$query = $this->db->query($sql, array($this->login, $this->senha));
			$row = $query->row();

			if($row != null){

				$this->id = $row->id;
				$this->nome = $row->nome;
				$this->sobrenome = $row->sobrenome;
				$this->login = $row->login;
				$this->senha = $row->senha;
				$this->rg = $row->rg;

				$sql = "SELECT * FROM gerente WHERE id = ?";
				$query = $this->db->query($sql, array($this->id));
				$row = $query->row();

				if($row != null){

					$this->graduacao = $row->graduacao;
					$this->idSupervisor = $row->idSupervisor;

					return new DtoGerente($this);
				}else{
					print_r("Não é um gerente!");
					exit;
				}
			}else{
				print_r("Pessoa não cadastrada!");
				exit;
			}
		}
	}
?>