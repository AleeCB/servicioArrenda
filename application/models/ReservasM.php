<?php
 class ReservasM extends CI_Model
 {

    function getReservas(){    
        $query = $this->db->get('reserva');
        return $query->result();
    }


 } ?>