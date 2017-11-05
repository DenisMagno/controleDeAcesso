<?php
	include_once APPPATH . 'libraries/PessoaLibrary.php';
	
	class ColaboradorLibrary extends PessoaLibrary{
		private $cnh;
		private $idGerente;

		/** Get's e set's **/

		//CNH
		public function getCnh(){
			return $this->cnh;
		}
		public function setCnh($cnh){
			$this->cnh = $cnh;
		}

		//ID GERENTE (Relacionamento com gerente)
		public function getIdGerente(){
			return $this->idGerente;
		}
		public function setIdGerente($idGerente){
			$this->idGerente = $idGerente;
		}

		/*
		*	Faz o login de um colaborador
		*
		*	@return array: os dados do colaborador
		*	@return boolean: false, caso não encontre nenhum colaborador.
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

				$sql = "SELECT * FROM colaborador WHERE id = ?";
				$query = $this->db->query($sql, array($this->id));
				$row = $query->row();

				if($row != null){

					$this->cnh = $row->cnh;
					$this->idGerente = $row->idGerente;

					return array(
							'id' => $this->id,
							'nome' => $this->nome,
							'sobrenome' => $this->sobrenome,
							'login' => $this->login,
							'senha' => $this->senha,
							'rg' => $this->rg,
							'cnh' => $this->cnh,
							'idGerente' => $this->idGerente
					);
				}else{
					return false;
				}
			}else{
				return false;
			}
		}
	}
?>