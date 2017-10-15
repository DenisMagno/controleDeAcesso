<?php
	/*Para alterar o controller padrão que é chamado na primeira página
	accessar application/config/routes.php */

	class Teste extends CI_Controller{

		//Função com nome index funciona como um construtor para o navegador.
		//Ela é executada logo que o controler e chamado no navegador sem a necessidade de especificar seu nome
		public function index(){
			echo "Funcionou!";
		}
	}
?>