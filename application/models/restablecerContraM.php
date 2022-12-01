<?php
 class RestablecerContraM extends CI_Model
 {

    function getRestablecerContras(){
        $query = $this->db->get('arrendatario');
        return $query->result();
    }


    function getRestablecerContra($IdContrasenia){    
        $this->db->where('IdContrasenia', $IdContrasenia);
        $query = $this->db->get('arrendatario');
        return $query->result();
    }


 } ?>