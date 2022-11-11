<?php
 class CalificacionesM extends CI_Model
 {

    function getCalificaciones(){
        $query = $this->db->get('comentario');
        return $query->result();
    }

 } ?>