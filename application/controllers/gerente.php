<?php
	class Gerente extends CI_Controller{
		private $logado;

		function __construct(){
			parent:: __construct();
			$this->logado = $this->session->userdata('gerente');

			if(empty($this->logado)){
				$this->load->helper('url');
				redirect(base_url());
			}
		}

		public function listaColaboradores(){
			$this->load->helper('url');
			$this->load->view('component/head.php');

			$dados = array('titulo' => 'Gerente',
							'nome' => $this->logado['nome'],
							'sobrenome' => $this->logado['sobrenome']);
			$this->load->view('menuView.php', $dados);

			$this->load->model('GerenteModel', 'model');
			
			$colaboradores = $this->model->listaColaboradores($this->logado['id']);

			$dados = array('titulo' => 'Lista de colaboradores',
							'colaboradores' => $colaboradores);
			$this->load->view('listaColaboradoresView.php', $dados);

			$this->load->view('component/footer.php');
		} 
	}
?>