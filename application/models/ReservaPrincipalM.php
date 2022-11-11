<?php
 class ReservaPrincipalM extends CI_Model
 {

    function getReservasPrincipal(){
        $query = $this->db->get('reserva');
        return $query->result();
    }


    function getReservaPrincipal($IdReserva){    
        $this->db->where('IdReserva', $IdReserva);
        $query = $this->db->get('reserva');
        return $query->result();
    }


 } ?>