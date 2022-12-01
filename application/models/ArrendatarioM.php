
 <?php
 class ArrendatarioM extends CI_Model
 {

    function getArrendatarios(){
        $query = $this->db->get('arrendatario');
        return $query->result();
    }

<<<<<<< HEAD
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


=======

    function getArrendatario($IdArrendatario){    
        $this->db->where('IdArrendatario', $IdArrendatario);
        $query = $this->db->get('arrendatario');
        return $query->result();
    }

    function InsertArrendatario(){
        $data = array(
       'nombre' => $this->input->post('nombre'),
       'apellidoP' => $this->input->post('apellidoP'),
       'apellidoM' =>$this->input->post('apellidoM'),
       'numeroTelefono' =>$this->input->post('numeroTelefono'),
       'lugarOrigen' =>$this->input->post('lugarOrigen'),
       'fechaNacimiento' =>$this->input->post('fechaNacimiento'),
       'credencialEstudiante' =>$this->input->post('credencialEstudiante'),
       'correo' =>$this->input->post('correo'),
       'contrasenia' =>md5($this->input->post('contrasenia'))
       );

       $this->db->insert('arrendatario', $data);
    }
>>>>>>> main
 } ?>