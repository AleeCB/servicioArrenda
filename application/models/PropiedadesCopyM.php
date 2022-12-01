<?php
 class PropiedadesM extends CI_Model
 {

    function getPropiedades(){
        $query = $this->db->get('propiedad');
 		return $query->result();
      }
    
   
    
    function getBusquedaPropiedades($nombre){
        $sql = "select * from propiedad where tipoPropiedad like '%$nombre%'" ;
        $query = $this->db->query($sql);
        return $query->result();
      }

     function getPropiedad($idPropiedad){
             $this->db->where('idPropiedad',$idPropiedad);
             $query = $this->db->get('propiedad');
             return $query->result();
         }
    
    //     function insertImagen($IdProducto,$file_name){
    //     $data = array(
    //         'IdProducto' => $IdProducto,
    //         'Imagen' => $file_name
    //     );
    
    //     $this->db->insert('ProductoImagenes', $data);
    //   }
    
    //   function getImagenesPorProducto($IdProducto){
    //     $this->db->where('IdProducto', $IdProducto);
    //     $query = $this->db->get('ProductoImagenes');
    //     return $query->result();
    //   }
    

 } ?>