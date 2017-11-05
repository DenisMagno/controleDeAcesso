<?php
	class Presidente extends CI_Controller{
		private $logado;

		/*
		*	Método construtor: Verifica se usuário está logado
		*
		*	Caso usuário não esteja logado com uma sessão ativa no sistema, redireciona o mesmo para página principal
		*
		*/
		function __construct(){
			parent:: __construct();
			$this->logado = $this->session->userdata("presidente");

			if(empty($this->logado)){
				$this->load->helper('url');
				redirect(base_url());
			}
		}

		/*
		*	Lista os supervisores que estão na hierarquia de um presidente, os gerentes que estão na hierarquia daqules supervisores e os colaboradores que estão na hierarquia daquele gerente.
		*/
		public function listaSupervisores(){
			$this->load->helper('url');
			$this->load->view('component/head.php');

			$dados = array('titulo' => 'Presidente',
							'nome' => $this->logado['nome'],
							'sobrenome' => $this->logado['sobrenome']);
			$this->load->view('menuView.php', $dados);

			$this->load->model('PresidenteModel', 'model');
			
			$supervisores = $this->model->listaSupervisores($this->logado['id']);
			$dados = array('titulo' => 'Lista de supervisores em sua hierarquia',
							'supervisores' => $supervisores);
			$this->load->view('listaSupervisoresView.php', $dados);	

			$this->load->view('component/footer.php');
		} 
	}
?>