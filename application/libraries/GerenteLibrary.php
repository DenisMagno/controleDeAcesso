<?php
	include_once APPPATH . 'libraries/PessoaLibrary.php';

	class GerenteLibrary extends PessoaLibrary{
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

		/*
		*	Faz o login de um gerente
		*
		*	@return array: os dados do gerente
		*	@return boolean: false, caso não encontre nenhum gerente.
		*/
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

					return array(
							'id' => $this->id,
							'nome' => $this->nome,
							'sobrenome' => $this->sobrenome,
							'login' => $this->login,
							'senha' => $this->senha,
							'rg' => $this->rg,
							'graduacao' => $this->graduacao,
							'idSupervisor' => $this->idSupervisor
					);
				}else{
					return false;
				}
			}else{
				return false;
			}
		}

		/*
		*	Pega os colaboradores na hierarquia de um gerente
		*
		*	@param int: id do gerente
		*	@return array: colaboradores encontrados
		*	@return boolean: false, caso não encontre nenhum colaborador.
		*/
		public function getColaboradores($idGerente){
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