<?php
 class PropiedadesM extends CI_Model
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


    function deletePropiedad($IdPropiedad){
        $this->db->where('IdPropiedad', $IdPropiedad);
        $this->db->delete('propiedad');
        return TRUE;
    }

 } ?>