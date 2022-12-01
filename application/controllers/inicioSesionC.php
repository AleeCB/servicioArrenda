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
				$this->load->view('vistaPrincipal/login');
        }
        else
        { 

                
                $this->load->model('InicioSesionM');
                $usuario1 = $this->InicioSesionM->validaUsuario($this->input->post('correo'), md5($this->input->post('contrasenia')));
                $usuario2 = $this->InicioSesionM->validaUsuario2($this->input->post('correo'), md5($this->input->post('contrasenia')));
                print_r($usuario1);
                print_r($usuario2);
                //if($usuario[0]->Perfil==1){
                if(count($usuario1)>0){
                        
                        $newdata = array(
                                'correo'  => $this->input->post('correo'),
                                'idArrendatario'     => $usuario[0]->idArrendatario,
                                'Logeado' => TRUE
                        );

                        $this->session->set_userdata($newdata);
                      redirect(base_url('index.php/PrincipalC/major'),'refresh'); 
                }

                else {
                        if(count($usuario2)>0){
                                
                                $newdata = array(
                                        'correo'  => $this->input->post('correo'),
                                        'idArrendador'     => $usuario[0]->idArrendador,
                                        'Logeado' => TRUE
                                );
        
                                $this->session->set_userdata($newdata);
                              redirect(base_url('index.php/PrincipalC/major'),'refresh'); 
                        }   
                }   
        }
    } 

} ?>