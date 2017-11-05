<?php
	class Supervisor extends CI_Controller{
		private $logado;

		/*
		*	Método construtor: Verifica se usuário está logado
		*
		*	Caso usuário não esteja logado com uma sessão ativa no sistema, redireciona o mesmo para página principal
		*
		*/
		function __construct(){
			parent:: __construct();
			$this->logado = $this->session->userdata("supervisor");

			if(empty($this->logado)){
				$this->load->helper('url');
				redirect(base_url());
			}
		}

		/*
		*	Lista os gerentes que estão na hierarquia de um supervisor e os colaboradores que estão na hierarquia daqueles gerentes
		*/
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