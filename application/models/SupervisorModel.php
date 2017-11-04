<?php
	include APPPATH . 'libraries/SupervisorLibrary.php';

	class SupervisorModel extends CI_Model{

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