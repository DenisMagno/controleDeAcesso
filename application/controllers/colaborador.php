<?php
	class Colaborador extends CI_Controller{
		private $logado;

		/*
		*	Método construtor: Verifica se usuário está logado
		*
		*	Caso usuário não esteja logado com uma sessão ativa no sistema, redireciona o mesmo para página principal
		*
		*/
		function __construct(){
			parent:: __construct();
			$this->logado = $this->session->userdata("colaborador");

			if(empty($this->logado)){
				$this->load->helper('url');
				redirect(base_url());
			}
		}

		/*
		*	Lista as tarefas de um colaborador.
		*/
		public function listaAfazeres(){
			$this->load->helper('url');
			$this->load->view('component/head.php');

			$dados = array('titulo' => 'Colaborador',
							'nome' => $this->logado['nome'],
							'sobrenome' => $this->logado['sobrenome']);
			$this->load->view('menuView.php', $dados);

			$dados = array('titulo' => 'Lista de afazeres');
			$this->load->view('afazeresView.php', $dados);

			$this->load->view('component/footer.php');
		} 
	}
?>