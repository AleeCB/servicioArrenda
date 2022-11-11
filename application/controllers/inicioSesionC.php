<?php

class inicioSesionC extends CI_Controller
{

    public function login(){

        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->form_validation->set_rules('correo', 'Correo', 'required');
	    $this->form_validation->set_rules('contrasenia', 'Password', 'required');

        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('headers/head');
				$this->load->view('headers/menu');
        }
        else
        {
                $this->load->model('InicioSesionM');
                $usuario = $this->InicioSesionM->validaUsuario($this->input->post('correo'), md5($this->input->post('contrasenia')));
                //if($usuario[0]->Perfil==1){
                if(count($usuario)>0){
                        $newdata = array(
                                'Correo'  => $this->input->post('Correo'),
                                'Perfil'     => $usuario[0]->Perfil,
                                'Logeado' => TRUE
                        );

                        $this->session->set_userdata($newdata);
                       redirect(base_url('index.php/PrincipalC/major'),'refresh'); 
                }
                //
        }
    } 

    

} ?>