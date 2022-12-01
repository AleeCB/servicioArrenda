<?php
 class ArrendadorM extends CI_Model
 {

    function getArrendadores(){
        $query = $this->db->get('arrendador');
        return $query->result();
    }


    function getArrendador($IdArrendador){    
        $this->db->where('IdArrendador', $IdArrendador);
        $query = $this->db->get('arrendador');
        return $query->result();
    }

    function InsertArrendador(){  
        $data = array(  
       'nombre' => $this->input->post('nombre'),
       'apellidoP' => $this->input->post('apellidoP'),
       'apellidoM' =>$this->input->post('apellidoM'),
       'correo' =>$this->input->post('correo'),
       'contrasenia' =>md5($this->input->post('contrasenia')),
       'fechaNacimiento' =>$this->input->post('fechaNacimiento'),
       'idioma' =>$this->input->post('idioma'),
       'numeroTelefono' =>$this->input->post('numeroTelefono'),
       'indiceRespuesta' =>$this->input->post('indiceRespuesta'),
       'tiempoRespuesta' =>$this->input->post('tiempoRespuesta'),
       'informacionExtra' =>$this->input->post('informacionExtra'),
       'foto' =>$this->input->post('foto'),
       );

       $this->db->insert('arrendador', $data);
    }

    function insertImagen($IdProducto,$file_name){
        $data = array(
            'IdProducto' => $IdProducto,
            'Imagen' => $file_name
        );
    
        $this->db->insert('ProductoImagenes', $data);
      }
    
      function getImagenesPorProducto($IdProducto){
        $this->db->where('IdProducto', $IdProducto);
        $query = $this->db->get('ProductoImagenes');
        return $query->result();
      }



 } ?>