<?php
class ArrendadorC extends CI_Controller
{




        function __construct() {
                parent::__construct();
                if(!$this->session->userdata('Logeado')){
                        redirect(base_url());
                }
         }


<<<<<<< HEAD
//     public function show(){
//         $this->load->model('ArrendadorM');
//         $data ['arrendadores'] = $this->ArrendadorM->getArrendadores();
//                     $this->load->view('headers/head.php');
//                     $this->load->view('headers/menu.php');
//                     $this->load->view('vistaPropiedades/vistaArrendatario.php', $data);
//                     $this->load->view('headers/footer.php');
//         }
=======
    public function show(){
        $this->load->model('ArrendadorM');
        $data ['arrendadores'] = $this->ArrendadorM->getArrendadores();
                    $this->load->view('headers/head.php');
                    $this->load->view('headers/menu.php');
                    $this->load->view('vistaPropiedades/vistaArrendatario.php', $data);
                    $this->load->view('headers/footer.php');
        }
>>>>>>> main

        public function major(){
        $this->load->model('ArrendadorM');
        $data ['arrendador'] = $this->PrincipalM->getArrendadores();

        $this->load->helper(array('form', 'url'));
        
                $this->load->library('form_validation');

                $this->form_validation->set_rules('nombre', 'nombre', 'required');
                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('headersArrendatario/head.php');
                        $this->load->view('headersArrendatario/menu.php');
                        $this->load->view('vistaArrendatario/inicioA.php', $data);
                        $this->load->view('headersArrendatario/footer.php');
                }
                else
                {
                        $this->load->view('formsuccess');
                }

        } 



        public function InsertArrendador(){
        $this->load->model('ArrendadorM');
        
        $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
                $this->form_validation->set_rules('nombre', 'nombre', 'required');
                if ($this->form_validation->run() == FALSE)
                {		
                        $this->load->view('headersP/head.php');
                        $this->load->view('headersP/menu.php');
                        
                        $this->load->view('headersP/footer.php');
                }
                else
                {
                        $this->ArrendadorM->InsertArrendador();
                        redirect(base_url('index.php/PrincipalC/major'),'refresh');
                }
        }

        public function insertImagen($IdProducto){
                $this->load->model('ProductosM');
                $data['imagenes'] = $this->ProductosM->getImagenesPorProducto($IdProducto);
         $this->load->library('form_validation');
       $this->form_validation->set_rules('subir', 'subir', 'required');
       $data['IdProducto'] = $IdProducto;
       if ($this->form_validation->run() == FALSE)
       {
                  $this->load->view('headers/head.php');
                  $this->load->view('headers/menu.php');
               $this->load->view('productos/insertImagenProducto',$data);
               $this->load->view('headers/footer.php');
       }
       else
               {
               $file_name = $IdProducto.'-'.md5(date('d-m-Y-h-mm-s'));

                 $config['upload_path']          = './uploads/';
               $config['allowed_types']        = 'png|jpeg|jpg';
               $config['max_size']             = 10000;
               $config['max_width']            = 10024;
               $config['max_height']           = 4768;
               $config['file_name'] = $file_name;
               $this->upload->initialize($config);
               $this->load->library('upload', $config);

               if ( ! $this->upload->do_upload('imagen'))
               {
                       
                       $error = array('error' => $this->upload->display_errors());

                       print_r($error);
               }
               else
               {
                      
               $this->ProductosM->insertImagen($IdProducto,$file_name.$this->upload->data('file_ext'));
                        redirect(base_url('index.php/ProductosC/insertImagen/'.$IdProducto),'refresh');
               }
              //
       }
<<<<<<< HEAD
  
        }
=======
}

// public function getArrendatario($IdArrendatario){
//     $this->load->view('headersArrendatario/head.php');
//     $this->load->view('headersArrendatario/menu.php');
    
//     $this->load->view('headersArrendatario/footer.php');
// }



>>>>>>> main

} ?>