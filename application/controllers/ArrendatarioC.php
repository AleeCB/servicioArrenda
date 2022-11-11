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

}
?>