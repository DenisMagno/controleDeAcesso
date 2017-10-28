<?php
	class PessoaController extends CI_Controller{
		public function login(){
			$this->load->helper('url');
			$this->load->view('component/head');

			$this->load->model('PessoaModel', 'model');

			$tipoPessoa = $this->input->post('tipoPessoa');

			switch ($tipoPessoa) {
				case "presidente":
				   $login = $this->model->loginPresidente();
				break;

				case "supervisor":
					$login = $this->model->loginSupervisor();
				break;

				case "gerente":
					$login = $this->model->loginGerente();
				break;

				case "colaborador":
				$login = $this->model->loginColaborador();
				break;
			}

			$this->load->view('component/head');
		}
	}
?>