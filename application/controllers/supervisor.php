<?php
	class Supervisor extends CI_Controller{
		private $logado;

		function __construct(){
			parent:: __construct();
			$this->logado = $this->session->userdata("supervisor");

			if(empty($this->logado)){
				$this->load->helper('url');
				redirect(base_url());
			}
		}

		public function listaGerentes(){
			$this->load->helper('url');
			$this->load->view('component/head.php');

			$dados = array('titulo' => 'Supervisor',
							'nome' => $this->logado['nome'],
							'sobrenome' => $this->logado['sobrenome']);
			$this->load->view('menuView.php', $dados);

			$this->load->model('SupervisorModel', 'model');

			$gerentes = $this->model->listaGerentes($this->logado['id']);
			$dados = array('titulo' => 'Lista de gerentes em sua hierarquia',
							'gerentes' => $gerentes);
			$this->load->view('listaGerentesView.php', $dados);	

			$this->load->view('component/footer.php');
		} 
	}
?>