<?php 
 
 /**
  * 
  */
 class PropiedadesM extends CI_Model
 {
 	
 	function getPropiedades()
 	{
 		$query = $this->db->get('propiedad'); 
 		 return $query->result();
 	}
 }

 ?>