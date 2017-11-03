<?php
	class Presidente extends CI_Controller{

		function __construct(){
			parent:: __construct();
			$logado = $this->session->userdata("presidente");

			if(empty($logado)){
				$this->load->helper('url');
				redirect(base_url());
			}
		}

		public function listaSupervisores(){
			$this->load->helper('url');
			$this->load->view('component/head.php');
			echo "Presidente Logou";
			$this->load->view('component/footer.php');
		} 
	}
?>