<?php
	include_once APPPATH . 'libraries/Pessoa.php';

	class Presidente extends Pessoa{
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

					//return $this;
					print_r("Funcionou presidente");
					exit;
				}else{
					print_r("Não é um presidente!");
					exit;
				}
			}else{
				print_r("Pessoa não cadastrada!");
				exit;
			}
		}
	}
?>