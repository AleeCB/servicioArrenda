<?php
 class ArrendatarioM extends CI_Model
 {

    function getArrendatarios(){
        $query = $this->db->get('arrendatario');
        return $query->result();
    }

    function editarPerfil($IdArrendatario){
        $data = array(
            'Fecha de nacimiento' => $this->input->post('fechaNacimiento'),
            'Correo electrónico' => $this->input->post('correo'),
            'Credencial de estudiante' => $this->input->post('credencialEstudiante'),
            'Lugar de origen' => $this->input->post('lugarOrigen'),
            'Foto' => $this->input->post('foto'),
    );
    
    $this->db->where('IdArrendatario', $IdArrendatario);
    $this->db->update('arrendatario', $data);
    }

    function cambiarContrasenia($IdArrendatario){
        
    }


 } ?>