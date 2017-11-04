<?php
	include_once APPPATH . 'libraries/PessoaLibrary.php';

	class SupervisorLibrary extends PessoaLibrary{
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

					return array(
							'id' => $this->id,
							'nome' => $this->nome,
							'sobrenome' => $this->sobrenome,
							'login' => $this->login,
							'senha' => $this->senha,
							'rg' => $this->rg,
							'graduacao' => $this->graduacao,
							'especializacao' => $this->especializacao,
							'idPresidente' => $this->idPresidente
					);
				}else{
					print_r("Não é um supervisor!");
					exit;
				}
			}else{
				print_r("Pessoa não cadastrada!");
				exit;
			}
		}

		public function getGerentes($idSupervisor){
			$sql = "SELECT * FROM gerente WHERE idSupervisor = ?";
			
			$query = $this->db->query($sql, array($idSupervisor));

			if($query->result() != null){
				foreach ($query->result_array() as $key => $row)
				{
					$gerente = $row;

					$sql = "SELECT * FROM pessoa WHERE id = ?";
					$query = $this->db->query($sql, array($row['id']));

					$pessoa = $query->result_array();

					$colaboradoresGerente = array('colaboradores' => $colaboradores = $this->getColaboradores($row['id']));
					
					$gerentes[$key] = array_merge($pessoa[0], $gerente, $colaboradoresGerente);
				}

				return $gerentes;
			}else{
				return false;
			}
		}

		private function getColaboradores($idGerente){
			$sql = "SELECT * FROM colaborador WHERE idGerente = ?";
			$query = $this->db->query($sql, array($idGerente));

			if($query->result() != null){
				foreach ($query->result_array() as $key => $row)
				{
					$colaborador = $row;

					$sql = "SELECT * FROM pessoa WHERE id = ?";
					$query = $this->db->query($sql, array($row['id']));

					$pessoa = $query->result_array();

					$colaboradores[$key] = array_merge($pessoa[0], $colaborador);
				}

				return $colaboradores;
			}else{
				return false;
			}
		}
	}
?>