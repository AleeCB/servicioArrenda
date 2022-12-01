<?php

class ReservaPrincipalC extends CI_Controller
{
    public function show(){
        $this->load->model('ReservaPrincipalM');
        $data ['reserva'] = $this->ReservaPrincipalM->getReservasPrincipal();

          $this->load->helper(array('form', 'url'));
        
                $this->load->library('form_validation');

                $this->form_validation->set_rules('servicio', 'servicio', 'required');
                if ($this->form_validation->run() == FALSE)
                {
                    $this->load->view('headersArrendatario/head.php');
                    $this->load->view('headersArrendatario/menu.php');
                    $this->load->view('vistaArrendatario/inicioReserva.php', $data);
                    $this->load->view('headersArrendatario/footer.php');
                }
                else
                {
                        $this->load->view('formsuccess');
                }
        }
    }
?>