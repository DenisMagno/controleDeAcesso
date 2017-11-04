<?php
	class Pessoa extends CI_Controller{
		public function login(){
			$this->load->helper('url');
			$this->load->view('component/head.php');

			$this->load->model('PessoaModel', 'model');

			$tipoPessoa = $this->input->post('tipoPessoa');

			switch ($tipoPessoa) {
				case "presidente":
					$login = $this->model->loginPresidente();
					if($login != false){
						$this->session->set_userdata('presidente', $login);
						redirect(base_url("presidente/listaSupervisores"));
					}else{
						$retorno = array('erro' => 'Erro ao logar-se como presidente',
										 'mensagem' => 'Pessoa não cadastrada ou não é um presidente!');
						$this->load->view('loginView.php',$retorno);
					}
					
				break;

				case "supervisor":
					$login = $this->model->loginSupervisor();
					if(!empty($login)){
						$this->session->set_userdata("supervisor", $login);
						redirect(base_url("supervisor/listaGerentes"));
					}else{
						$retorno = array('erro' => 'Erro ao logar-se como supervisor',
										 'mensagem' => 'Pessoa não cadastrada ou não é um supervisor!');
						$this->load->view('loginView.php',$retorno);
					}
				break;

				case "gerente":
					$login = $this->model->loginGerente();
					if(!empty($login)){
						$this->session->set_userdata("gerente", $login);
						redirect(base_url("gerente/listaColaboradores"));
					}else{
						$retorno = array('erro' => 'Erro ao logar-se como gerente',
										 'mensagem' => 'Pessoa não cadastrada ou não é um gerente!');
						$this->load->view('loginView.php',$retorno);
					}
				break;

				case "colaborador":
					$login = $this->model->loginColaborador();
					if(!empty($login)){
						$this->session->set_userdata("colaborador", $login);
						redirect(base_url("colaborador/listaAfazeres"));
					}else{
						$retorno = array('erro' => 'Erro ao logar-se como colaborador',
										 'mensagem' => 'Pessoa não cadastrada ou não é um colaborador!');
						$this->load->view('loginView.php',$retorno);
					}
				break;
			}

			$this->load->view('component/footer.php');
		}

		public function logout(){
			$this->load->helper('url');
			$this->session->sess_destroy();

			redirect(base_url());
		}
	}
?>