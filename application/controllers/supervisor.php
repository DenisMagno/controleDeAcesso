<?php
	class Supervisor extends CI_Controller{

		function __construct(){
			parent:: __construct();
			$logado = $this->session->userdata("supervisor");

			if(empty($logado)){
				$this->load->helper('url');
				redirect(base_url());
			}
		}

		public function listaGerentes(){
			$this->load->helper('url');
			$this->load->view('component/head.php');
			echo "Supervisor Logou";
			$this->load->view('component/footer.php');
		} 
	}
?>