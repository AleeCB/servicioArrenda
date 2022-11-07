<?php

class inicioSesionC extends CI_Controller
{

    public function login(){
        $this->load->view('headersP/head');
        $this->load->view('vistaPrincipal/login');

    } 

    

} ?>