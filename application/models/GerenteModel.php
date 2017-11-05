<?php
	include APPPATH . 'libraries/GerenteLibrary.php';

	class GerenteModel extends CI_Model{

		/*
		*	Lista colaboradores
		*
		*	@param int: id do gerente
		*	@return array: colaboradores 
		*	@return boolean: false, caso não encontre nenhum colaborador.
		*/
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