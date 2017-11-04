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

			$this->load->model('PresidenteModel', 'model');
			
			$supervisores = $this->model->listaSupervisores($this->logado['id']);

			echo "<pre>".print_r($supervisores, 1)."</pre>";
			$this->load->view('component/footer.php');
		} 
	}
?>