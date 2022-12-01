<?php  
/**
 * 
 */
class InicioSesionM extends CI_Model
{
	
	function validaUsuario($correo, $contrasenia){
		$sql="Select IdArrendatario, correo, contrasenia from arrendatario where correo = '$Correo' and contrasenia = '$contrasenia'";
		$query = $this->db->query($sql);
		//echo $this->db->last_query();
		return $query->result();  
	} 
}?>