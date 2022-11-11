<?php

class CalificacionC extends CI_Controller
{
    public function show(){
        $this->load->model('CalificacionesM');
        $data ['calificaciones'] = $this->CalificacionesM->getCalificaciones();
                   $this->load->view('headers/head.php');
                    $this->load->view('headers/menu.php');
                    $this->load->view('vistaPropiedades/calificacion.php', $data);
                    $this->load->view('headers/footer.php');
        }
}?>