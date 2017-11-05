<?php
	include APPPATH . 'libraries/SupervisorLibrary.php';

	class SupervisorModel extends CI_Model{

		/*
		*	Lista gerentes
		*
		*	@param int: id do supervisor
		*	@return array: gerentes 
		*	@return boolean: false, caso não encontre nenhum gerente.
		*/
		public function listaGerentes($id){
			$supervisor = new SupervisorLibrary();

			$gerentes = $supervisor->getGerentes($id);

			if($gerentes != null){
				return $gerentes;
			}else{
				return false;
			}
		}
	}
?>