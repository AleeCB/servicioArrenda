<div class="container">
    <table class="table table-bordered">
        <div class="alert alert-primary" role="alert">
            <h1 class="text-center">Mis propiedades</h1>
        </div>
        <thead class="table" style="background-color: #09506C">
            <th class="text-white text-center">Id</th>
            <th class="text-white text-center">Nombre de la propiedad</th>
            <th class="text-white text-center">Ubicación</th>
            <th class="text-white text-center">Número de habitantes</th>
            <th class="text-white text-center">Precio</th>
            <th class="text-white text-center">Estatus</th>
            <th class="text-white text-center">Amueblado</th>
            <th class="text-white text-center">Tipo de propiedad</th>
            <th class="text-white text-center">Foto</th>
            <th class="text-white text-center">Acción</th>
        </thead>
        <tbody class="table-light text-center">
            <?php foreach($propiedades as $key): ?>
            <tr>
                <td><?=$key->idPropiedad?></td>
                <td><?=$key->nombre?></td>
                <td><?=$key->ubicacion?></td>
                <td><?=$key->numHabitantes?></td>
                <td><?=$key->precio?></td>
                <td><?=$key->estatus?></td>
                <td><?=$key->amueblado?></td>
                <td><?=$key->tipoPropiedad?></td>
                <td><?=$key->fotoPrincipal?></td>
                <td> 
<<<<<<< HEAD
=======
<<<<<<< HEAD
                    <a class=" btn btn-info"
=======
<<<<<<< HEAD
>>>>>>> 35b094692fa6ff190621fe6fe33dd573f9d2bb94
                    <!-- Button trigger modal -->
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <p class="text-center"><button type="button" class="btn btn-info"
                                class="d-grid gap-1 d-md-block col-1 mx-auto" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">
                                EDITAR
                            </button>
                        </p>
                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">EDITAR PROPIEDAD</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container">
                                            <p>Nombre de la propiedad :<?=$propiedades[0]->nombre?></p>
                                            <p>Ubicacion: <?=$propiedades[0]->ubicacion?></p>
                                            <p>Número de habitantes: <?=$propiedades[0]->numHabitantes?></p>
                                            <p>Precio: <?=$propiedades[0]->precio?></p>
                                            <p>Estatus: <?=$propiedades[0]->estatus?></p>
                                            <p>Amueblado: <?=$propiedades[0]->amueblado?></p>
                                            <p>Tipo de propiedad: <?=$propiedades[0]->tipoPropiedad?></p>
                                            <p>Foto principal: <?=$propiedades[0]->fotoPrincipal?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
<<<<<<< HEAD
=======
=======
                    <a class="btn btn-info"
>>>>>>> d1f2a6288c7dbfca84d2b133688bdcd88ca0ec51
                        href="<?=base_url('index.php/PropiedadesC/editarPropiedad/').$key->idPropiedad?>">EDITAR
                    </a>
>>>>>>> 43ce9365449030caa1fa298e37d1f27e90f08a7f
>>>>>>> 35b094692fa6ff190621fe6fe33dd573f9d2bb94
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
<<<<<<< HEAD
=======
<<<<<<< HEAD
    <div class="d-grid gap-1 col-2 mx-auto">
        <a class="btn btn-success" href="<?=base_url('index.php/PropiedadesC/insertarPropiedad/')?>"
            type="button">AGREGAR PROPIEDAD
        </a>
    </div>
=======
<<<<<<< HEAD
>>>>>>> 35b094692fa6ff190621fe6fe33dd573f9d2bb94
    <!-- Button trigger modal -->

    <div class="d-grid gap-2 col-6 mx-auto">
        <div class="d-grid gap-2 col-6 mx-auto">

            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="button" class="btn btn-primary" class="d-grid gap-2 d-md-block col-6 mx-auto"
                    data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    AGREGAR PROPIEDAD
                </button>
            </div>
        </div>

<<<<<<< HEAD
        <!-- Modal 
=======
        <!-- Modal -->
=======
    <a class="btn btn-info" href="<?=base_url('index.php/PropiedadesC/insertarPropiedad/').$key->idPropiedad ?>"
        type="button">AGREGAR PROPIEDAD
    </a>
>>>>>>> d1f2a6288c7dbfca84d2b133688bdcd88ca0ec51
</div>

<!-- Modal 
>>>>>>> 43ce9365449030caa1fa298e37d1f27e90f08a7f
>>>>>>> 35b094692fa6ff190621fe6fe33dd573f9d2bb94
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">NUEVA PROPIEDAD</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <form action="<?=base_url('index.php/PropiedadesC/insertarPropiedad')?>" method="POST">
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
                                <input class="form-check-input" type="checkbox" class="form-control" name="amueblado">
                                <label class="form-check-label">Amueblado</label></br>
                                <label for="">Tipo de propiedad: </label>
                                <select class="input is-large" name="tipo" id="">
                                    <option value="Casa">Casa</option>
                                    <option value="Cuato">Cuarto</option>
                                    <option value="Pension">Pensión</option>
                                    <option value="Departamento">Departamento</option>
                                </select><br>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-primary" type="submit">ENVIAR</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>->