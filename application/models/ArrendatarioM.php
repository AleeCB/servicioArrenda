<?php
 class ArrendatarioM extends CI_Model
 {

    function getArrendatarios(){
        $query = $this->db->get('arrendatario');
        return $query->result();
    }
 } ?>