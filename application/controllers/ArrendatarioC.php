<?php
class ArrendatarioC extends CI_Controller
{
    public function show(){
        $this->load->model('ArrendatarioM');
        $data ['arrendatarios'] = $this->ArrendatarioM->getArrendatarios();
                    $this->load->view('headers/head.php');
                    $this->load->view('headers/menu.php');
                    $this->load->view('vistaPropiedades/vistaArrendatario.php', $data);
                    $this->load->view('headers/footer.php');
}


public function editarPerfil($IdArrendatario){
    $this->load->model('ArrendatarioM');
    $data ['arrendatarios'] = $this->ArrendatarioM->getArrendatarios($IdArrendatario);
                $this->load->view('headers/head.php');
                $this->load->view('headers/menu.php');
                $this->load->view('vistaPropiedades/editarPerfil.php', $data);
                $this->load->view('headers/footer.php');
                $this->ArrendatarioM->editarPerfil();
                redirect(base_url('index.php/ArrendatariosC/show'), 'refresh');
}

}
?>