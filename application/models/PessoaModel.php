<?php
	include APPPATH . 'libraries/Presidente.php';
	include APPPATH . 'libraries/Supervisor.php';
	include APPPATH . 'libraries/Gerente.php';
	include APPPATH . 'libraries/Colaborador.php';

	class PessoaModel extends CI_Model{

		public function loginPresidente(){
			$presidente = new Presidente();

			$presidente->setLogin($this->input->post('login'));
			$presidente->setSenha($this->input->post('senha'));
			$result = $presidente->login();

			if($result != null){
				return $result;
			}else{
				return false;
			}
		}

		public function loginSupervisor(){
			$supervisor = new Supervisor();

			$supervisor->setLogin($this->input->post('login'));
			$supervisor->setSenha($this->input->post('senha'));
			$result = $supervisor->login();

			if($result != null){
				return $result;
			}else{
				return false;
			}
		}

		public function loginGerente(){
			$gerente = new Gerente();

			$gerente->setLogin($this->input->post('login'));
			$gerente->setSenha($this->input->post('senha'));

			$result = $gerente->login();

			if($result != null){
				return $result;
			}else{
				return false;
			}
		}

		public function loginColaborador(){
			$colaborador = new Colaborador();

			$colaborador->setLogin($this->input->post('login'));
			$colaborador->setSenha($this->input->post('senha'));

			$result = $colaborador->login();

			if($result != null){
				return $result;
			}else{
				return false;
			}
		}
	}
?>