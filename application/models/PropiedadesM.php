<?php
 class PropiedadesM extends CI_Model
 {

    function getPropiedades(){
        $query = $this->db->get('propiedad');
        return $query->result();
    }


    function getPropiedad($IdPropiedad){    
        $this->db->where('IdPropiedad', $IdPropiedad);
        $query = $this->db->get('propiedad');
        return $query->result();
    }


    function deletePropiedad($IdPropiedad){
        $this->db->where('IdPropiedad', $IdPropiedad);
        $this->db->delete('propiedad');
        return TRUE;
    }


    function insertarPropiedad(){
        $data = array(
            'Foto principal' => $this->input->post('fotoPrincipal'),
            'Foto 1' => $this->input->post('foto1'),
            'Foto 2' => $this->input->post('foto2'),
            'Foto 3' => $this->input->post('foto3'),
            'Foto 4' => $this->input->post('foto4'),
            'Nombre' => $this->input->post('nombre'),
            'Ubicacion' => $this->input->post('ubicacion'),
            'Personas permitidas' => $this->input->post('numHabitantes'),
            'Precio' => $this->input->post('precio'),
            'Disponible' => $this->input->post('estatus'),
            'Amueblado' => $this->input->post('amueblado'),
            'Tipo de propiedad' => $this->input->post('tipoPropiedad'),
    );
    
    $this->db->insert('propiedad', $data);
    }

 } ?>