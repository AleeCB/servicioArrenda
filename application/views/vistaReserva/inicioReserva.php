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
    <div class="row" style="background-color: white">
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
                <h3 class="lead" style="font-family:Lucida Sans;"> <strong>Descripción:</strong> Casa en renta para 2
                    personas en la comunidad <br>
                    de Aire Libre. <br>
                    <b>Ubicación:</b> Cerca del instituto Tecnologico <br>
                    Superior de Teziutlán <br>
                    <b>Ubicación:</b> $1200 mensuales.
                </h3>
            </div>
            <div class="col-4">
                <a class="btn btn-primary btn-lg" href="#" role="button">Agregar reserva</a>
                <a class="btn btn-primary btn-lg" href="<?=base_url('index.php/CalificacionC/show/')?>"
                    role="button">Agregar comentario y evaluar</a>
            </div>  
        </div>

    </div>

</body>

</html>

<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<PIE DE PÁGINA>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
</main>
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
                            src="https://teziutlan.tecnm.mx/wp-content/uploads/2019/03/itst_footer_logo.png" width="130"
                            height="40"></a>

                </div>
            </div>
        </div>
    </div>
    <div class="text-center  pt-3 pb-3"> Derechos reservados © Comhar <p style="color: blue; "> Privacidad y Condiciones
        </p>

    </div>