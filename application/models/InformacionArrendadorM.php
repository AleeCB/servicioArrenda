<?php
 class InformacionArrendadorM extends CI_Model
 {

    function getInformacionArrendador(){
        $query = $this->db->get('arrendador');
        return $query->result();
    }

 } ?>