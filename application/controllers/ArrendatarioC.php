<?php
class ArrendatarioC extends CI_Controller
{
    public function show(){
        $this->load->model('ArrendatarioM');
        $data ['arrendatarios'] = $this->ArrendatarioM->getArrendatarios();
                    $this->load->view('headersArrendatario/head.php');
                    $this->load->view('headersArrendatario/menu.php');
                    $this->load->view('vistaPropiedades/vistaArrendatario.php', $data);
                    $this->load->view('headersArrendatario/footer.php');
}


    public function editarPerfil($IdArrendatario){
        $this->load->model('ArrendatarioM');
        $data ['arrendatarios'] = $this->ArrendatarioM->getArrendatarios($IdArrendatario);
                $this->load->view('headersArrendatario/head.php');
                $this->load->view('headersArrendatario/menu.php');
                $this->load->view('vistaPropiedades/editarPerfil.php', $data);
                $this->load->view('headersArrendatario/footer.php');
                
                $this->ArrendatarioM->editarPerfil($IdArrendatario);
                redirect(base_url('index.php/ArrendatarioC/show'), 'refresh');
}

}
?>