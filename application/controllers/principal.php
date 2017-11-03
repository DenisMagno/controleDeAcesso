<?php
	class Principal extends CI_Controller{

		//Função com nome index funciona como um construtor para o navegador.
		//Ela é executada logo que o controler e chamado no navegador sem a necessidade de especificar seu nome
		public function index(){
			$this->load->helper("url");
			$this->load->view("component/head.php");
			
			$this->load->view("loginView.php");

			$this->load->view("component/footer.php");
		}
	}
?>