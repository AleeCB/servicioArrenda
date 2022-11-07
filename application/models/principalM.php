<?php
 class principalM extends CI_Model
 {

    function getPropiedades(){
        $query = $this->db->get('propiedad');
        return $query->result();
    }


    function getPropiedad($IdPropiedad){    
        $this->db->where('IdPropiedad', $IdPropiedad);
        $query = $this->db->get('propiedad');
        return $query->result();
    }


 } ?>