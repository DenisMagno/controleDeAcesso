<?php
	class Colaborador extends CI_Controller{

		function __construct(){
			parent:: __construct();
			$logado = $this->session->userdata("colaborador");

			if(empty($logado)){
				$this->load->helper('url');
				redirect(base_url());
			}
		}

		public function listaAfazeres(){
			$this->load->helper('url');
			$this->load->view('component/head.php');
			echo "Colaborador Logou";
			$this->load->view('component/footer.php');
		} 
	}
?>