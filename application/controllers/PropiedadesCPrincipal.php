<?php

class PropiedadesCPrincipal extends CI_Controller
{
   
	function __construct() {
        parent::__construct();
        if(!$this->session->userdata('Logeado')){
            redirect(base_url());
        }
 }


 public function show(){
     $this->load->model('PropiedadesCopyM');
     $data['propiedades'] = $this->PropiedadesCopyM->getPropiedades();
     $this->load->view('headersP/head.php');
     $this->load->view('headersP/menu.php');


     $this->load->helper(array('form', 'url'));

             $this->load->library('form_validation');

             $this->form_validation->set_rules('nombre', 'nombre', 'required');

             if ($this->form_validation->run() == FALSE)
             {

         $this->load->view('vistaPrincipal/inicio.php',$data);

             }
             else
             {
                    $data['propiedades'] = $this->PropiedadesCopyM->getBusquedaPropiedadess($this->input->post('nombre'));
                     $this->load->view('vistaPrincipal/inicio.php',$data);
             }

             $this->load->view('headersP/footer.php');
     
 }

    public function getPropiedad ($IdPropiedad){
        $this->load->view('headersP/head.php');
        $this->load->view('headersP/menu.php');
        $this->load->view('headersP/footer.php');
    }
}?>