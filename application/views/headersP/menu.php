<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- <nav class="navbar navbar-expand-lg bg-prymary" style="background-color: #e3f2fd; "> sticky-top-->
    <nav class="navbar navbar-expand-lg p-0 sticky-top" style="background-color: #155772; ">
        <div class="container-fluid">
            <a class="navbar-brand">


            <img class="logo-img" src="https://dewey.tailorbrands.com/production/brand_version_mockup_image/742/7947075742_f01d45f9-8f6e-4b54-b12f-ff95d000250b.png?cb=1669146189"
                width="180" height="32" class="d-inline-block align-text-top">
                   
            </a>

            <!-- <form class="d-flex" role="search">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li>
                    <button type="button" class="btn btn-outline text-black  " style="background-color: #FFFFFF;"
                        class="d-grid gap-2 d-md-block col-6 mx-auto" data-bs-toggle="modal" data-bs-target="#registro">
                        <h5>Regístrate</h5>
                    </button>
                </li>
            </ul>

            <button type="button"class="btn outline-dark" class="d-grid gap-2 d-md-block col-6 mx-auto" data-bs-toggle="modal"
                        data-bs-target="#iniciar"><svg xmlns="http://www.w3.org/2000/svg" width="35"
                    height="35" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <title>Iniciar sesión</title>
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                </svg></button> -->
            <form class="d-flex" role="search">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="text-center">

                        <!-- <a class="btn btn-outline text-black btn-lg" style="background-color: #FFFFFF;" href="<?=base_url('index.php/InicioSesionC/login/')?>"
                    role="button"><h5><?=$this->session->userdata('correo') ?>   Regístrate</h5></a> -->

                        <button type="button" class="btn btn-outline text-white" style="background-color: #155772;"
                            class="d-grid gap-2 d-md-block col-6 mx-auto" data-bs-toggle="modal"
                            data-bs-target="#registro">
                            <h5>Regístrate</h5>
                        </button>
                    </li>
                </ul>

                <button type="button" class="btn outline-dark text-white" class="d-grid gap-2 d-md-block col-6 mx-auto"
                    data-bs-toggle="modal" data-bs-target="#iniciar"><svg xmlns="http://www.w3.org/2000/svg" width="35"
                        height="35" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <title>Iniciar sesión</title>
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg></button>

                <!-- <a class="btn outline-dark btn-lg" href="<?=base_url('index.php/InicioSesionC/login/')?>"
                    role="button"><svg xmlns="http://www.w3.org/2000/svg" width="35"
                        height="35" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <title>Iniciar sesión</title>
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg></a> -->

                <!-- // <a class="btn outline-dark" herf="<?=base_url('index.php/InicioSesionC/login/')?>"  role="button"  ></a>  -->



            </form>
        </div>
    </nav>

    <!-- Modal de Registro -->
    <div class="modal fade" id="registro" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel"><img
                            src="https://dewey.tailorbrands.com/production/brand_version_mockup_image/281/7826038281_05bdbfb5-ba7b-4213-9e02-3488afd0c93c.png?cb=1667763509"
                            width="110" height="20"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="background-color: #31AFB4;">
                    <div class="container">
                        <form action="<?=base_url('index.php/PropiedadesC/InsertarPropiedad')?>" method="POST">
                            <br> <br>

                            <h4 class="text-center">Regístrate</h4>
                            <br>
                            <h2 class="text-center">¡Elige la opción de tú interes!</h2>
                            <br>

                            <div class="container">
                                <div class="row">

                                    <div class="col-3">
                                    </div>
                                    <!-- los dos botones llevan a modales(ventanas emergentes) -->
                                    <div class="col-3">
                                        <button type="button" class="btn btn-outline text-black  "
                                            style="background-color: #FFFFFF; "
                                            class="d-grid gap-2 d-md-block col-6 mx-auto" data-bs-toggle="modal"
                                            data-bs-target="#estudiante">
                                            <h6>Estudiante</h6>
                                        </button>
                                    </div>
                                    <div class="col-3">
                                        <button type="button" class="btn btn-outline text-black  "
                                            style="background-color: #FFFFFF;"
                                            class="d-grid gap-2 d-md-block col-6 mx-auto" data-bs-toggle="modal"
                                            data-bs-target="#arrendador">
                                            <h6>Arrendador</h6>
                                        </button>
                                    </div>
                                    <div class="col-3">
                                    </div>
                                </div>

                            </div>

                            <br><br>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de Registro como estudiante -->
    <div class="modal fade" id="estudiante" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel"><img
                            src="https://dewey.tailorbrands.com/production/brand_version_mockup_image/281/7826038281_05bdbfb5-ba7b-4213-9e02-3488afd0c93c.png?cb=1667763509"
                            width="110" height="20"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="background-color: #31AFB4;">
                    <div class="container">
                    <?php echo validation_errors(); ?>
		             <!-- <?php echo form_open_multipart('ArrendatarioC/insertImagen');?> -->
                        <form action="<?=base_url('index.php/ArrendatarioC/InsertArrendatario')?>" method="POST">
   
                            <br> <br>

                            <h3 class="text-center">Regístrate como Estudiante</h3>
                            <br>


                            <div class="container">
                                <label>Nombre</label>
                                <input type="text" class="form-control" name="nombre" class="w-10 p-3"><br>
                                <label>Apellido paterno:</label>
                                <input type="text" class="form-control" name="apellidoP"><br>
                                <label>Apellido materno:</label>
                                <input type="text" class="form-control" name="apellidoM"><br>
                                <label>Número de telefono:</label>
                                <input type="text" class="form-control" name="numeroTelefono"><br>
                                <label>Lugar de origen:</label>
                                <input type="text" class="form-control" name="lugarOrigen"><br>
                                <label>fecha de nacimiento :</label>
                                <input type="DATE" class="form-control" name="fechaNacimiento"><br>
                                <label>Credencial de estudiante:</label>
                                <input type="file" class="form-control" class="w-10 p-3" name="credencialEstudiante"><br>
                                <label>correo:</label>
                                <input type="text" class="form-control" min="800" max="5000" name="correo"><br>
                                <label>contraseña:</label>
                                <input type="text" class="form-control" min="800" max="5000" name="contrasenia"> <br>

                            </div>
                            
                            <div class="modal-footer">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-primary" type="submit"  class="d-grid gap-2 d-md-block col-6 mx-auto" data-bs-toggle="modal"
                                            data-bs-target="#agregado">Registrarme</button>
                                    
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal de Registro -->
    <div class="modal fade" id="registro" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel"><img
                            src="https://dewey.tailorbrands.com/production/brand_version_mockup_image/281/7826038281_05bdbfb5-ba7b-4213-9e02-3488afd0c93c.png?cb=1667763509"
                            width="110" height="20"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="background-color: #31AFB4;">
                    <div class="container">
                       
                        <h3>Registro exitoso</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal de Registro como arrendador -->

    <div class="modal fade" id="arrendador" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel"><img
                            src="https://dewey.tailorbrands.com/production/brand_version_mockup_image/281/7826038281_05bdbfb5-ba7b-4213-9e02-3488afd0c93c.png?cb=1667763509"
                            width="110" height="20"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="background-color: #31AFB4;">
                    <div class="container">
                        <form action="<?=base_url('index.php/ArrendadorC/InsertArrendador')?>" method="POST">
                            <br> <br>

                            <h3 class="text-center">Regístrate como Arrendador</h3>
                            <br>


                            <div class="container">
                                <label>Nombre:</label><input type="text" class="form-control" name="nombre" class="w-10 p-3">
                                <label>Apellido paterno:</label>
                                <input type="text" class="form-control" name="apellidoP">
                                <label>Apellido materno:</label>
                                <input type="text" class="form-control" name="apellidoM">
                                <label>correo:</label>
                                <input type="text" class="form-control" min="800" max="5000" name="correo2">
                                <label>contraseña:</label>
                                <input type="text" class="form-control" min="800" max="5000" name="contrasenia2">

                                
                                <label>fecha de nacimiento:</label>
                                <input type="DATE" class="form-control" name="fechaNacimiento">


                                <label for="">Idioma: </label>
                                <select class="textfiel valid" name="idioma" >
                                    <option value="Español"> Español</option>
                                    <option value="Inglés">Inglés</option>
                                    <option value="Nahuált">Nahuált</option>

                                </select> <br>
                                <label>Número de telefono:</label>
                                <input type="text" class="form-control" name="numeroTelefono">
                                <label>indice de respuesta:</label>
                                <input type="text" class="form-control" min="1" max="10" name="indiceRespuesta">
                                <label>tiempo de respuesta:</label>
                                <input type="text" class="form-control" min="1" max="10" vale="" name="tiempoRespuesta">
                                <label>Información extra:</label>
                                <input type="text" class="form-control" min="1" max="10" vale="En dias"
                                    name="informacionExtra">
                                <label>Foto:</label>
                                <input type="file" class="form-control" class="w-10 p-3" name="foto">

                                <br>

                            </div>
                            <div class="modal-footer">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-primary" type="submit">Registrarme </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- inicio de sesion  -->

    <div class="modal fade" id="iniciar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel"><img
                            src="https://dewey.tailorbrands.com/production/brand_version_mockup_image/281/7826038281_05bdbfb5-ba7b-4213-9e02-3488afd0c93c.png?cb=1667763509"
                            width="110" height="20"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="background-color: #31AFB4;">
                    <div class="container">
                        <form action="<?=base_url('index.php/inicioSesionC/login')?>" method="POST">
                            <br> <br>
                            <h4 class="text-center">¡Bienvenodo a Foreigner's Site!</h4>
                            <br>
                            <div class="container">
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <label for="example" class="form-label">Email:</label>
                                    </div>
                                    <div class="col-9">
                                        <input type="email" name="correo" class="form-control" id=""><br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <label for="example" class="form-label">Contraseña:</label>
                                    </div>
                                    <div class="col-9">
                                        <input type="password" name="contrasenia" class="form-control" id=""><br>
                                    </div>
                                </div>

                            </div>
                    </div>
                    <div class="modal-footer tex-center">

                        <a class="btn btn-outline-secondary text-black" style=" background-color: white" href="#"
                            role="button">Olvidé mi contraseña</a>


                        </a>
                        <button class="btn btn-outline-secondary tex-white" style="color: white; "
                            type="submit">ENVIAR</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>