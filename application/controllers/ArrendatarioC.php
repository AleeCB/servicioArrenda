
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

public function major(){
    $this->load->model('ArrendatarioM');
    $data ['arrendatario'] = $this->PrincipalM->getArrendatarios();

      $this->load->helper(array('form', 'url'));
    
            $this->load->library('form_validation');

            $this->form_validation->set_rules('servicio', 'servicio', 'required');
            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('headersArrendatario/head.php');
                $this->load->view('headersArrendatario/menu.php');
                $this->load->view('vistaArrendatario/inicioA.php', $data);
                $this->load->view('headersArrendatario/footer.php');
            }
            else
            {
                    $this->load->view('formsuccess');
            }

} 



public function InsertArrendatario(){
    $this->load->model('ArrendatarioM');
   
    $this->load->helper(array('form', 'url'));

            $this->load->library('form_validation');
            $this->form_validation->set_rules('nombre', 'nombre', 'required');
            if ($this->form_validation->run() == FALSE)
            {		
                    $this->load->view('headersP/head.php');
                    $this->load->view('headersP/menu.php');
                    
                    $this->load->view('headersP/footer.php');
            }
            else
            {
                   $this->ArrendatarioM->InsertArrendatario();
                   redirect(base_url('index.php/PrincipalC/major'),'refresh');
            }
}

// public function insertImagen(){
//     $config['upload_path']          = './uploads/';
//           $config['allowed_types']        = 'gif|jpg|png|jpeg';
//           $config['max_size']             = 10000;
//           $config['max_width']            = 10024;
//           $config['max_height']           = 4768;

//           $this->load->library('upload', $config);

//           if ( ! $this->upload->do_upload('credencialEstudiante'))
//           {
//                   $error = array('error' => $this->upload->display_errors());

//                   print_r($error);
//           }
//           else
//           {
//                   $data = array('upload_data' => $this->upload->data());

//                   $this->load->view('upload_success', $data);
//           }

// }

// public function getArrendatario($IdArrendatario){
//     $this->load->view('headersArrendatario/head.php');
//     $this->load->view('headersArrendatario/menu.php');
    
//     $this->load->view('headersArrendatario/footer.php');
// }




}?>