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

    public function insertarReserva(){
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('headers/head.php');
            $this->load->view('headers/menu.php');
            $this->load->view('vistaReserva/insertarReserva');
            $this->load->view('headers/footer.php');
        }
        else
        {
            //$this->load->view('formsuccess');
        }
    }
}?>