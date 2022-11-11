<?php

class ReservasC extends CI_Controller
{
    public function show(){
        $this->load->model('ReservasM');
        $data ['reservas'] = $this->ReservasM->getReservas();
                    $this->load->view('headers/head.php');
                    $this->load->view('headers/menu.php');
                    $this->load->view('vistaPropiedades/reservaPropiedades.php', $data);
                    $this->load->view('headers/footer.php');
        }
        
    public function getReservas($IdReserva){
        $this->load->view('headers/head.php');
        $this->load->view('headers/menu.php');
        $this->load->view('headers/footer.php');
    }
}?>