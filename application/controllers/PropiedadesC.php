<!-- Esta es la vista principal -->
<!-- Para poder verla  http://localhost/desweb2022/index.php/PropiedadesC/show# -->

<?php /**
 * 
 */
class PropiedadesC extends CI_Controller 
{
	
	public function show(){
		// Cargar el modelo y despues ejecutar la funcion (pasandola a una variable llamada propiedades)
 		 $this->load->model('PropiedadesM');
 		 $data['propiedades'] = $this->PropiedadesM->getPropiedades();


		$this->load->view('headers/head.php');
		$this->load->view('headers/menu.php');

		// Para mostrar lo elementos creamos una carpeta dendro de views llamada Propiedades, dentro de esa un archivo llamado listaPropiedades.php 
		// Se invoca productos/listaPropiedades

		$this->load->view('propiedades/listaPropiedades.php',$data);// al la vista se le pasan los datos 
		$this->load->view('headers/footer.php');
	}

	public function getPropiedad($IdPropiedad){
		$this->load->view('headers/head.php');
		$this->load->view('headers/menu.php');
		$this->load->view('headers/footer.php');
	}


} ?>