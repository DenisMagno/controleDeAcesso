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

			$this->load->model('SupervisorModel', 'model');
			
			$gerentes = $this->model->listaGerentes($this->logado['id']);

			echo "<pre>".print_r($gerentes, 1)."</pre>";
			$this->load->view('component/footer.php');
		} 
	}
?>