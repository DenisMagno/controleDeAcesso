<?php
	class Gerente extends CI_Controller{

		function __construct(){
			parent:: __construct();
			$logado = $this->session->userdata("gerente");

			if(empty($logado)){
				$this->load->helper('url');
				redirect(base_url());
			}
		}

		public function listaColaboradores(){
			$this->load->helper('url');
			$this->load->view('component/head.php');
			echo "Gerente Logou";
			$this->load->view('component/footer.php');
		} 
	}
?>