<?php
 class ReservasM extends CI_Model
 {

    function getReservas(){    
       $query = $this->db->get('Reserva');
       return $query->result();
    }
 } ?>