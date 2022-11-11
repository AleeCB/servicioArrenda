<!-- <nav class="navbar navbar-expand-lg bg-prymary" style="background-color: #e3f2fd; "> sticky-top-->

<nav class="navbar navbar-expand-lg p-0" style="background-color: #FFFFFF;">
    <div class="container-fluid">
        <a class="navbar-brand">

            <img src="https://dewey.tailorbrands.com/production/brand_version_mockup_image/281/7826038281_05bdbfb5-ba7b-4213-9e02-3488afd0c93c.png?cb=1667763509"
                width="220" height="40">
        </a>
        <form class="d-flex" role="search">
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
                </svg></button>

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
                                                    style="background-color: #FFFFFF;"
                                                    class="d-grid gap-2 d-md-block col-6 mx-auto" data-bs-toggle="modal"
                                                    data-bs-target="#registro">
                                                    <h5>Regístrate</h5>
                                                </button>
                                            </div>
                                            <div class="col-3">
                                                <button type="button" class="btn btn-outline text-black  "
                                                    style="background-color: #FFFFFF;"
                                                    class="d-grid gap-2 d-md-block col-6 mx-auto" data-bs-toggle="modal"
                                                    data-bs-target="#registro">
                                                    <h5>Regístrate</h5>
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



            <!-- Modal de inicio de sesion -->
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
                                <form action="<?=base_url('index.php/PropiedadesC/InsertarPropiedad')?>" method="POST">
                                    <br> <br>
                                    <h4 class="text-center">¡Bienvenodo a Foreigner's Site!</h4>
                                    <br>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-3 text-center">
                                                <label>Nombre:</label>
                                            </div>
                                            <div class="col-9">
                                                <input type="text" class="form-control" name="nombre"
                                                    class="w-10 p-3"><br>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3 text-center">
                                                <label>Contraseña: </label>
                                            </div>
                                            <div class="col-9">
                                                <input type="text" class="form-control" name="nombre"
                                                    class="w-10 p-3"><br>
                                            </div>
                                        </div>

                                    </div>
                            </div>
                            <div class="modal-footer tex-center">
                                
                            <a class="btn btn-outline-secondary text-black"   style=" background-color: white" href="#" role="button">Olvidé mi contraseña</a>
                                
                                
                </a>
                                    <button class="btn btn-outline-secondary tex-white" style="color: white; " type="submit">ENVIAR</button>
                                
                            </div>
        </form>
    </div>
</nav>

<!-- <body>
<hr style="color: gray; background-color: black; width:100%;" />
</body> -->