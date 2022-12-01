<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xd</title>
    <link rel="stylesheet" href="estilos.css" />
</head>

<body>

    <style>
    body {
        background-color: #99D9EA;
    }

    
    hr {
        height: 3px;
        background-color: black;
    }

    #form {
        width: 250px;
        margin: 0 auto;
        height: 50px;
    }

    #form p {
        text-align: center;
    }

    #form label {
        font-size: 20px;

    }

    input[type="radio"] {
        display: none;

    }

    label {
        color: grey;

    }

    .clasificacion {
        direction: rtl;
        unicode-bidi: bidi-override;
    }

    label:hover,
    label:hover~label {
        color: orange;

    }

    input[type="radio"]:checked~label {
        color: orange;

    }


    </style>
    <div class="row">
        <div class="col-4">
            <hr style="color: gray; background-color: black; width:100%;" />
        </div>
        <div class="col-4">
            <form class="d-flex" role="search">
                <input class="form-control me-2 is-rounded is-responsive" type="search" placeholder="Buscar"
                    aria-label="Search" style="color: black; width:100%"><button class="btn btn-outline text-white"
                    style="background-color: #155772;" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg></button>
            </form>
        </div>

        <div class="col-4">
            <hr style="color: gray; background-color: black; width:100%;" />
        </div>

    </div> <br> <br>
    <!-- FOTOGRAGIAS EN LA VISTA PRINCIPAL    -->

    <div class="container">
        <div class="row">

            <!-- FOTOGRAGIA PRINCIPAL   -->
            <div class="col-4">
                <img src="https://ara.com.mx/api/files/casas-modelo-olivos-all-oli1.jpg" width="500" height="500"
                    class="img-thumbnail">
            </div>

            <!-- FOTOGRAGIAS SECUNDARIAS  1-->
            <div class="col">
                <img src="https://images.homify.com/image/upload/c_scale,h_500,w_500/v1440275435/p/photo/image/593090/Designer_de_Interiores_e_Paisagista_Iara_K_laris_Projeto_de_Interiores_Swiss_Park_2__5_.jpg"
                    width="200" height="200" class="img-thumbnail">
            </div>

            <!-- FOTOGRAGIAS SECUNDARIAS  2-->
            <div class="col">
                <img src="https://cosasycasosdecasa.com/wp-content/uploads/2018/02/interiores-de-casas-rayas-min.jpg"
                    width="200" height="200" class="img-thumbnail">
            </div>

            <!-- FOTOGRAGIAS SECUNDARIAS  3-->
            <div class="col">
                <img src="https://images.squarespace-cdn.com/content/v1/5ced130dd18bb200019d14d8/f61643b6-790e-41a5-8619-cd6d83b65607/Entradas+azules-Archipalettes.jpg"
                    width="200" height="200" class="img-thumbnail">
            </div>

            <!-- FOTOGRAGIAS SECUNDARIAS  4-->
            <div class="col">
                <img src="https://images.hola.com/imagenes/decoracion/20221111220321/cama-dormitorio-elegir-medida-am/1-160-360/guia-elegir-cama-7e-e.jpg?tx=w_500"
                    width="200" height="200" class="img-thumbnail">
            </div>
            <!-- HASTA ACÁ - FOTOGRAGIAS SECUNDARIAS  -->

        </div>

        <div class="row">
            <div class="col-8">
                <br><br>
                <h3 class="lead" style="font-family:Lucida Sans;"> <strong> <b>Descripción:</b></strong> Casa en renta para 2
                    personas en la comunidad <br>
                    de Aire Libre. <br>
                    <b>Ubicación:</b> Cerca del instituto Tecnologico <br>
                    Superior de Teziutlán <br>
                    <b>Ubicación:</b> $1200 mensuales
                </h3>
            </div>
            <div class="col-4">
                <a class="btn btn-primary btn-lg" href="<?=base_url('index.php/ReservaPrincipalC/insertarReserva/')?>"
                    role="button">Agregar Reserva</a>
                <a class="btn btn-primary btn-lg" href="<?=base_url('index.php/CalificacionC/show/')?>"
                    role="button">Agregar comentario</a>
            </div>
        </div>
        <hr>
        <!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<COMENTARIOS>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
        <div class="linea"></div>
        <div class="container">
            <h1 class="text-left">COMENTARIOS</h1><br></br>

            <div class="row">

                <div class="col-6">
                    <div class="row">
                        <div class="col-1">
                            <img src="https://cdn-icons-png.flaticon.com/512/1946/1946429.png" alt="" width="30px"
                                height="30px">
                        </div>
                        <div class="col-1">

                            <h4>HANNA</h4>
                        </div>
                        <h5 style="font-family:Lucida Sans;"> El lugar en cuestión es decente, cumple con los servicios necesarios <br> 
                        además de que el sitio tiene un ambiente muy agradable</h5>
                    </div>

                    <div class="row">
                        <div class="col-1">
                            <img src="https://cdn-icons-png.flaticon.com/512/1946/1946429.png" alt="" width="30px"
                                height="30px">
                        </div>
                        </div>
                        <div class="row">
                        <div class="col">
                            <h4>LEONARDO</h4>
                            <h5 style="font-family:Lucida Sans;">El lugar es bastante decente en comparacion de otros <br>
                                                                    que el lugar.</h5>
                        </div>
                        </div>
                        
                   

                    <form>
                        <p class="clasificacion">
                            <input id="radio1" type="radio" name="estrellas" value="5">
                            <!--
    --><label for="radio1">★</label>
                            <!--
    --><input id="radio2" type="radio" name="estrellas" value="4">
                            <!--
    --><label for="radio2">★</label>
                            <!--
    --><input id="radio3" type="radio" name="estrellas" value="3">
                            <!--
    --><label for="radio3">★</label>
                            <!--
    --><input id="radio4" type="radio" name="estrellas" value="2">
                            <!--
    --><label for="radio4">★</label>
                            <!--
    --><input id="radio5" type="radio" name="estrellas" value="1">
                            <!--
    --><label for="radio5">★</label>
                        </p>
                    </form>



                </div>
            </div>
        </div>
        <hr class="xd">
        <div class="container">
            <div class="row">
                <div class="col-1">
                    <img src="https://cdn-icons-png.flaticon.com/512/64/64572.png" alt="" width="60px" height="60px">
                </div>
                <div class="col-1">

                    <h2>ARRENDADOR</h2>
                </div>
                <p></p>
                <div class="row">
                    <div class="col-1"> <i> <b>MARCO ANTONIO </b></i>
                    </div>
                    <p> <b> Idioma: </b> Español</p>
                    <p><b> Indice de respuesta:</b> 100%</p>
                    <p> <b>Tiempo de respuestas:</b> 3hr</p>

                </div>
                <a class="btn btn-primary btn-lg" href="<?=base_url('index.php/InformacionArrendadorC/show/')?>"
                    role="button">Más Información</a>
            </div>
        </div>
        <!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<VENTANA RESERVA>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->



        <!-- Modal
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">NUEVA RESERVA</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <form action="<?=base_url('index.php/ReservaPrincipalC/insertarReserva')?>" method="POST">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-1">
                                        </div>
                                        <div class="col-2">
                                            <input type="date" class="form-control" class="w-10 p-3"
                                                name="fotoPrincipal">
                                            <label>Fecha Inicio:</label>
                                        </div>
                                        <div class="col-2">
                                            <input type="date" class="form-control" class="w-10 p-3"
                                                name="fotoPrincipal">
                                            <label>Fecha fin:</label>
                                        </div>
                                        <div class="col-2">
                                            <input type="number" class="form-control" class="w-10 p-3"
                                                name="fotoPrincipal">
                                            <label>Numero Habitantes:</label>
                                        </div>
                        </div>
                    </div>  
                    <div class="modal-footer">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-primary" type="submit">RESERVAR</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
</body>


</html>-->

        <!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<PIE DE PÁGINA>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->





























        <div>
            <footer class="bd-footer">
                <div class="pt-3 pb-3" style="background:#A6A6A6">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg text-white d-flex align-items-center">
                                <img class=" d-none d-lg-block"
                                    src="https://dewey.tailorbrands.com/production/brand_version_mockup_image/281/7826038281_05bdbfb5-ba7b-4213-9e02-3488afd0c93c.png?cb=1667763509"
                                    alt="" />
                            </div>
                            <div class="col-lg text-white">
                                <div class="pt-2 pb-2">
                                    <strong>Acerca del Foreigner´s Site</strong>
                                </div>
                                <p>Quiénes somos</p>
                                <p>Marco normativo</p>
                                <p>Transparencia</p>
                                <p>Desarrolladores</p>
                            </div>
                            <div class="col-lg text-white">
                                <div class="pt-2 pb-2">
                                    <strong>Contacto</strong>
                                </div>
                                <p>231 564 52 41</p>
                                <p>Chat</p>
                                <p>atencion.usuarios@siteF.com</p>
                                <p>Solicitud de información</p>

                                <div class="mt-3 mb-3">

                                </div>
                            </div>
                            <div class="col-lg text-white">
                                <div class="pt-2 pb-2">
                                    <strong>Sitios de interés</strong>
                                </div>
                                <a class="text-white d-block" target="_blank" href="https://teziutlan.tecnm.mx/"><img
                                        src="https://teziutlan.tecnm.mx/wp-content/uploads/2019/03/itst_footer_logo.png"
                                        width="130" height="40"></a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center  pt-3 pb-3"> Derechos reservados © Comhar <p style="color: blue; "> Privacidad y
                        Condiciones
                    </p>

                </div>
        </div>