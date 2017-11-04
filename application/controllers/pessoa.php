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
					if(!empty($login)){
						$this->session->set_userdata('presidente', $login);
						redirect(base_url("presidente/listaSupervisores"));
					}else{
						echo "Não logou!";
						exit;
					}
					
				break;

				case "supervisor":
					$login = $this->model->loginSupervisor();
					if(!empty($login)){
						$this->session->set_userdata("supervisor", $login);
						redirect(base_url("supervisor/listaGerentes"));
					}else{
						echo "Não logou!";
						exit;
					}
				break;

				case "gerente":
					$login = $this->model->loginGerente();
					if(!empty($login)){
						$this->session->set_userdata("gerente", $login);
						redirect(base_url("gerente/listaColaboradores"));
					}else{
						echo "Não logou!";
						exit;
					}
				break;

				case "colaborador":
					$login = $this->model->loginColaborador();
					if(!empty($login)){
						$this->session->set_userdata("colaborador", $login);
						redirect(base_url("colaborador/listaAfazeres"));
					}else{
						echo "Não logou!";
						exit;
					}
				break;
			}

			$this->load->view('component/footer.php');
		}
	}
?>