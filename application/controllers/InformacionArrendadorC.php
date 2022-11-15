<?php

class InformacionArrendadorC extends CI_Controller
{
    public function show(){
        $this->load->model('InformacionArrendadorM');
        $data ['InformacionArrendador'] = $this->InformacionArrendadorM->getInformacionArrendador();
                   $this->load->view('headers/head.php');
                   $this->load->view('headers/menu.php');
                    $this->load->view('vistaPropiedades/InformacionArrendador.php', $data);
                    $this->load->view('headers/footer.php');
        }
}?>