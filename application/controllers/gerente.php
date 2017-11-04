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

			$this->load->model('GerenteModel', 'model');
			
			$colaboradores = $this->model->listaColaboradores($this->logado['id']);

			echo "<pre>".print_r($colaboradores, 1)."</pre>";

			$this->load->view('component/footer.php');
		} 
	}
?>