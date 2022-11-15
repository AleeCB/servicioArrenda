<?php

class ReservasC extends CI_Controller
{
    public function show(){
        $this->load->model('ReservasM');
        $data ['reservas'] = $this->ReservasM->getReservas();
                    $this->load->view('headersArrendatario/head.php');
                    $this->load->view('headersArrendatario/menu.php');
                    $this->load->view('vistaPropiedades/reservaPropiedades.php', $data);
                    $this->load->view('headersArrendatario/footer.php');
        }
        
    public function getReservas($IdReserva){
        $this->load->view('headersArrendatario/head.php');
        $this->load->view('headersArrendatario/menu.php');
        $this->load->view('headersArrendatario/footer.php');
    }
}?>