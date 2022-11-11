<<<<<<< HEAD
<!-- <nav class="navbar navbar-expand-lg bg-prymary" style="background-color: #e3f2fd; "> sticky-top-->
=======
<!-- <nav class="navbar navbar-expand-lg bg-prymary" style="background-color: #e3f2fd; "> -->
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="https://dewey.tailorbrands.com/production/brand_version_mockup_image/281/7826038281_05bdbfb5-ba7b-4213-9e02-3488afd0c93c.png?cb=1667763509"
                width="220" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
>>>>>>> a745dea985c703b123aebedbfe1111494ced14ba

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
                        class="d-grid gap-2 d-md-block col-6 mx-auto" data-bs-toggle="modal"
                        data-bs-target="#registro">
                        <h5>Regístrate</h5>
                    </button>
                </li>
<<<<<<< HEAD
=======



>>>>>>> a745dea985c703b123aebedbfe1111494ced14ba
            </ul>
            

<<<<<<< HEAD
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
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Registro</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <form action="<?=base_url('index.php/PropiedadesC/InsertarPropiedad')?>" method="POST">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-1">
                                            </div>
                                            <div class="col-2">
                                                <input type="file" class="form-control" class="w-10 p-3"
                                                    name="fotoPrincipal">
                                                <label>Foto principal</label>
                                            </div>
                                            <div class="col-2">
                                                <input type="file" class="form-control" class="w-10 p-3"
                                                    name="fotoPrincipal">
                                                <label>Foto 1</label>
                                            </div>
                                            <div class="col-2">
                                                <input type="file" class="form-control" class="w-10 p-3"
                                                    name="fotoPrincipal">
                                                <label>Foto 2</label>
                                            </div>
                                            <div class="col-2">
                                                <input type="file" class="form-control" class="w-10 p-3"
                                                    name="fotoPrincipal">
                                                <label>Foto 3</label>
                                            </div>
                                            <div class="col-2">
                                                <input type="file" class="form-control" class="w-10 p-3"
                                                    name="fotoPrincipal">
                                                <label>Foto 4</label>
                                            </div>
                                            <div class="col-1">
                                            </div>
                                        </div>
                                    </div>
                                    <label>Nombre</label>
                                    <input type="text" class="form-control" name="nombre" class="w-10 p-3"><br>
                                    <label>Ubicación</label>
                                    <input type="text" class="form-control" name="ubicacion"><br>
                                    <label>Personas permitidas</label>
                                    <input type="number" class="form-control" name="numHabitantes"><br>
                                    <label>Precio</label>
                                    <input type="number" class="form-control" min="800" max="5000" name="precio">
                                    <input class="form-check-input" type="checkbox" class="form-control" name="estatus">
                                    <label class="form-check-label">Disponible</label><br>
                                    <input class="form-check-input" type="checkbox" class="form-control"
                                        name="amueblado">
                                    <label class="form-check-label">Amueblado</label></br>
                                    <label for="">Tipo de propiedad: </label>
                                    <select class="input is-large" name="tipo" id="">
                                        <option value="Casa">Casa</option>
                                        <option value="Cuato">Cuarto</option>
                                        <option value="Pension">Pensión</option>
                                        <option value="Departamento">Departamento</option>
                                    </select><br>

                                    <div class="modal-footer">
                                        <div class="d-grid gap-2 col-6 mx-auto">
                                            <button class="btn btn-primary" type="submit">ENVIAR</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            
                    <!-- Modal de inicio de sesion -->
                    <div class="modal fade" id="iniciar" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Inicio </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <form action="<?=base_url('index.php/PropiedadesC/InsertarPropiedad')?>"
                                            method="POST">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-1">
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="file" class="form-control" class="w-10 p-3"
                                                            name="fotoPrincipal">
                                                        <label>Foto principal</label>
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="file" class="form-control" class="w-10 p-3"
                                                            name="fotoPrincipal">
                                                        <label>Foto 1</label>
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="file" class="form-control" class="w-10 p-3"
                                                            name="fotoPrincipal">
                                                        <label>Foto 2</label>
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="file" class="form-control" class="w-10 p-3"
                                                            name="fotoPrincipal">
                                                        <label>Foto 3</label>
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="file" class="form-control" class="w-10 p-3"
                                                            name="fotoPrincipal">
                                                        <label>Foto 4</label>
                                                    </div>
                                                    <div class="col-1">
                                                    </div>
                                                </div>
                                            </div>
                                            <label>Nombre</label>
                                            <input type="text" class="form-control" name="nombre" class="w-10 p-3"><br>
                                            <label>Ubicación</label>
                                            <input type="text" class="form-control" name="ubicacion"><br>
                                            <label>Personas permitidas</label>
                                            <input type="number" class="form-control" name="numHabitantes"><br>
                                            <label>Precio</label>
                                            <input type="number" class="form-control" min="800" max="5000"
                                                name="precio">
                                            <input class="form-check-input" type="checkbox" class="form-control"
                                                name="estatus">
                                            <label class="form-check-label">Disponible</label><br>
                                            <input class="form-check-input" type="checkbox" class="form-control"
                                                name="amueblado">
                                            <label class="form-check-label">Amueblado</label></br>
                                            <label for="">Tipo de propiedad: </label>
                                            <select class="input is-large" name="tipo" id="">
                                                <option value="Casa">Casa</option>
                                                <option value="Cuato">Cuarto</option>
                                                <option value="Pension">Pensión</option>
                                                <option value="Departamento">Departamento</option>
                                            </select><br>

                                            <div class="modal-footer">
                                                <div class="d-grid gap-2 col-6 mx-auto">
                                                    <button class="btn btn-primary" type="submit">ENVIAR</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </form>
=======
            <form class="d-flex" role="search">

                <button class="btn outline-dark" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="35"
                        height="35" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg></button>

            </form>
        </div>
>>>>>>> a745dea985c703b123aebedbfe1111494ced14ba
    </div>
</nav>

<!-- <body>
<hr style="color: gray; background-color: black; width:100%;" />
</body> -->