<?php

class inicioSesionC extends CI_Controller
{

    public function login(){
        $this->load->view('headersP/header');
        $this->load->view('headersP/menu');
        $this->load->view('vistaPrincipal/login');

    } 

    

} ?>