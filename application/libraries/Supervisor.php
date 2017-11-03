<?php
	include_once APPPATH . 'libraries/Pessoa.php';
	include_once APPPATH . 'helpers/dataTransferObjects/DtoSupervisor.php';

	class Supervisor extends Pessoa{
		private $graduacao;
		private $especializacao;
		private $idPresidente;

		/** Get's e set's **/

		//GRADUAÇÃO
		public function getGraduacao(){
			return $this->graduacao;
		}

		public function setGraduacao($graduacao){
			$this->graduacao = $graduacao;
		}

		//ESPECIALIZAÇÃO
		public function getEspecializacao(){
			return $this->especializacao;
		}

		public function setEspecializacao($especializacao){
			$this->especializacao = $especializacao;
		}

		//ID PRESIDENTE (Relacionamento com presidente)
		public function getIdPresidente(){
			return $this->idPresidente;
		}

		public function setIdPresidente($idPresidente){
			$this->idPresidente = $idPresidente;
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

				$sql = "SELECT * FROM supervisor WHERE id = ?";
				$query = $this->db->query($sql, array($this->id));
				$row = $query->row();

				if($row != null){

					$this->graduacao = $row->graduacao;
					$this->especializacao = $row->especializacao;
					$this->idPresidente = $row->idPresidente;

					return new DtoSupervisor($this);
				}else{
					print_r("Não é um supervisor!");
					exit;
				}
			}else{
				print_r("Pessoa não cadastrada!");
				exit;
			}
		}
	}
?>