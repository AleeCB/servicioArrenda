<?php  
/**
 * 
 */
class InicioSesionM extends CI_Model
{
	
	function validaUsuario($correo, $contrasenia){
		$sql="Select idArrendatario, correo, nombre 
		from arrendatario where correo = '$correo' and contrasenia = '$contrasenia'";
		$query = $this->db->query($sql);
		////echo $this->db->last_query();
		return $query->result();  
	}

    function validaUsuario2($correo, $contrasenia){
		$sql="Select idArrendador, correo, nombre 
		from arrendador where correo = '$correo' and contrasenia = '$contrasenia'";
		$query = $this->db->query($sql);
		//echo $this->db->last_query();
		return $query->result();  
	}





	function getArrendatarios(){
        $query = $this->db->get('arrendatario');
        return $query->result();
    }


    function getArrendatario($idArrendatario){    
        $this->db->where('idArrendatario', $idArrendatario);
        $query = $this->db->get('arrendatario');
        return $query->result();
    }
}?>