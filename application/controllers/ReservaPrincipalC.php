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
                    $this->load->view('headers/head.php');
                    $this->load->view('headers/menu.php');
                    $this->load->view('vistaReserva/inicioReserva.php', $data);
                    $this->load->view('headers/footer.php');
                }
                else
                {
                        $this->load->view('formsuccess');
                }
        }
    }
?>