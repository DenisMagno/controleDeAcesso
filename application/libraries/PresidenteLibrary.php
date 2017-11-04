<?php
	include_once APPPATH . 'libraries/PessoaLibrary.php';

	class PresidenteLibrary extends PessoaLibrary{
		private $setor;
		
		/** Get's e set's **/

		//SETOR
		public function getSetor(){
			return $this->setor;
		}

		public function setSetor($setor){
			$this->setor = $setor;
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

				$sql = "SELECT * FROM presidente WHERE id = ?";
				$query = $this->db->query($sql, array($this->id));
				$row = $query->row();

				if($row != null){
					$this->setor = $row->setor;

					return array(
							'id' => $this->id,
							'nome' => $this->nome,
							'sobrenome' => $this->sobrenome,
							'login' => $this->login,
							'senha' => $this->senha,
							'rg' => $this->rg,
							'setor' => $this->setor
					);
				}else{
					print_r("Não é um presidente!");
					exit;
				}
			}else{
				print_r("Pessoa não cadastrada!");
				exit;
			}
		}

		public function getSupervisores($idPresidente){
			$sql = "SELECT * FROM supervisor WHERE idPresidente = ?";
			
			$query = $this->db->query($sql, array($idPresidente));

			if($query->result() != null){
				foreach ($query->result_array() as $key => $row)
				{
					$supervisor = $row;


					$sql = "SELECT * FROM pessoa WHERE id = ?";
					$query = $this->db->query($sql, array($row['id']));

					$pessoa = $query->result_array();

					$gerentesSupervisor = array('gerentes' => $gerentes = $this->getGerentes($row['id']));
					

					$supervisores[$key] = array_merge($pessoa[0], $supervisor, $gerentesSupervisor);
				}

				return $supervisores;
			}else{
				return false;
			}
		}

		private function getGerentes($idSupervisor){
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