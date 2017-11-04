<?php
	class Presidente extends CI_Controller{
		private $logado;

		function __construct(){
			parent:: __construct();
			$this->logado = $this->session->userdata("presidente");

			if(empty($this->logado)){
				$this->load->helper('url');
				redirect(base_url());
			}
		}

		public function listaSupervisores(){
			$this->load->helper('url');
			$this->load->view('component/head.php');

			$dados = array('titulo' => 'Presidente',
							'nome' => $this->logado['nome'],
							'sobrenome' => $this->logado['sobrenome']);
			$this->load->view('menuView.php', $dados);

			$this->load->model('PresidenteModel', 'model');
			
			$supervisores = $this->model->listaSupervisores($this->logado['id']);
			$dados = array('titulo' => 'Lista de supervisores',
							'supervisores' => $supervisores);
			$this->load->view('listaSupervisoresView.php', $dados);	

			$this->load->view('component/footer.php');
		} 
	}
?>