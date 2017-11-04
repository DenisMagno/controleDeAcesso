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
					print_r("Não é um colaborador!");
					exit;
				}
			}else{
				print_r("Pessoa não cadastrada!");
				exit;
			}
		}
	}
?>