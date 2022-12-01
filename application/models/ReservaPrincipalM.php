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
    
    function insertarReserva(){
        $data = array(
            'fechaInicio' => $this->input->post('fechaInicio'),
            'fechaFin' => $this->input->post('fechaFin'),
            'numHuesped' => $this->input->post('numHuesped'),
    );
    
    $this->db->insert('reserva', $data);
    }

 } ?>