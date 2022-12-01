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
            'fotoPrincipal' => $this->input->post('fotoPrincipal'),
            'foto1' => $this->input->post('foto1'),
            'foto2' => $this->input->post('foto2'),
            'foto3' => $this->input->post('foto3'),
            'foto4' => $this->input->post('foto4'),
            'nombre' => $this->input->post('nombre'),
            'ubicacion' => $this->input->post('ubicacion'),
            'numHabitantes' => $this->input->post('numHabitantes'),
            'precio' => $this->input->post('precio'),
            'estatus' => $this->input->post('estatus'),
            'amueblado' => $this->input->post('amueblado'),
            'tipoPropiedad' => $this->input->post('tipoPropiedad'),
    );
    
    $this->db->insert('propiedad', $data);
    }
    


    function editarPropiedad(){
        $data = array(
            'fotoPrincipal' => $this->input->post('fotoPrincipal'),
            'foto1' => $this->input->post('foto1'),
            'foto2' => $this->input->post('foto2'),
            'foto3' => $this->input->post('foto3'),
            'foto4' => $this->input->post('foto4'),
            'nombre' => $this->input->post('nombre'),
            'ubicacion' => $this->input->post('ubicacion'),
            'numHabitantes' => $this->input->post('numHabitantes'),
            'precio' => $this->input->post('precio'),
            'estatus' => $this->input->post('estatus'),
            'amueblado' => $this->input->post('amueblado'),
            'tipoPropiedad' => $this->input->post('tipoPropiedad'),
    );
    
    $this->db->where('idPropiedad', $IdPropiedad);
    $this->update('propiedad', $data);
    }

 } ?>