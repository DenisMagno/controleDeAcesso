<?php
	include APPPATH . 'libraries/PresidenteLibrary.php';

	class PresidenteModel extends CI_Model{

		/*
		*	Lista supervisores
		*
		*	@param int: id do presidente
		*	@return array: supervisores 
		*	@return boolean: false, caso não encontre nenhum supervisor.
		*/
		public function listaSupervisores($id){
			$presidente = new PresidenteLibrary();

			$supervisores = $presidente->getSupervisores($id);

			if($supervisores != null){
				return $supervisores;
			}else{
				return false;
			}
		}
	}
?>