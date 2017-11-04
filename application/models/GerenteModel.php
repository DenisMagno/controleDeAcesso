<?php
	include APPPATH . 'libraries/GerenteLibrary.php';

	class GerenteModel extends CI_Model{

		public function listaColaboradores($id){

			$gerente = new GerenteLibrary();

			$colaboradores = $gerente->getColaboradores($id);

			if($colaboradores != null){
				return $colaboradores;
			}else{
				return false;
			}
		}
	}
?>