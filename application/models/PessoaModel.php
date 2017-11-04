<?php
	include APPPATH . 'libraries/PresidenteLibrary.php';
	include APPPATH . 'libraries/SupervisorLibrary.php';
	include APPPATH . 'libraries/GerenteLibrary.php';
	include APPPATH . 'libraries/ColaboradorLibrary.php';

	class PessoaModel extends CI_Model{

		public function loginPresidente(){
			$presidente = new PresidenteLibrary();

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
			$supervisor = new SupervisorLibrary();

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
			$gerente = new GerenteLibrary();

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
			$colaborador = new ColaboradorLibrary();

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