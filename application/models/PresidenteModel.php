<?php
	include APPPATH . 'libraries/PresidenteLibrary.php';

	class PresidenteModel extends CI_Model{

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