<div class="container">
    <table class="table table-bordered">
        <h1 class="text-center">Mis propiedades</h1>
        <thead class="table-success">
            <th class="text-center">Id</th>
            <th class="text-center">Nombre de la propiedad</th>
            <th class="text-center">Ubicación</th>
            <th class="text-center">Número de habitantes</th>
            <th class="text-center">Precio</th>
            <th class="text-center">Estatus</th>
            <th class="text-center">Amueblado</th>
            <th class="text-center">Tipo de propiedad</th>
            <th class="text-center">Foto</th>
            <th class="text-center">ACCION</th>
        <tbody class="table-light">
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
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
        </thead>
    </table>
    <!-- Button trigger modal -->
<<<<<<< HEAD
    <div class="d-grid gap-2 col-6 mx-auto">
        <p class="text-center"><button type="button" class="btn btn-success"
                class="d-grid gap-1 d-md-block col-1 mx-auto" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                AGREGAR PROPIEDAD </p>
        </button> </p>
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
    <div class="d-grid gap-2 col-6 mx-auto">
=======
<<<<<<< HEAD
>>>>>>> e41d65d25bddf01b19d2c334a403fc2073dfa839
    <div class="d-grid gap-2 col-6 mx-auto" >
=======
    <<<<<<< HEAD <div class="d-grid gap-2 col-6 mx-auto">
>>>>>>> 49dff0354aafd2cfc348a857cea21d56527d953c
>>>>>>> 9242a61458c590f67e948ff670e44699ceda415b
        <button type="button" class="btn btn-primary" class="d-grid gap-2 d-md-block col-6 mx-auto"
            data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            AGREGAR PROPIEDAD
        </button>
<<<<<<< HEAD
    </div>
=======
<<<<<<< HEAD
>>>>>>> e41d65d25bddf01b19d2c334a403fc2073dfa839

=======
<<<<<<< HEAD
>>>>>>> d21e8d8c2fea6828420e290adbfcc67a83e07f6d
    </div>

    <!-- Modal -->
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
                                        <input type="file" class="form-control" class="w-10 p-3" name="fotoPrincipal">
                                        <label>Foto principal</label>
                                    </div>
                                    <div class="col-2">
                                        <input type="file" class="form-control" class="w-10 p-3" name="fotoPrincipal">
                                        <label>Foto 1</label>
                                    </div>
                                    <div class="col-2">
                                        <input type="file" class="form-control" class="w-10 p-3" name="fotoPrincipal">
                                        <label>Foto 2</label>
                                    </div>
                                    <div class="col-2">
                                        <input type="file" class="form-control" class="w-10 p-3" name="fotoPrincipal">
                                        <label>Foto 3</label>
                                    </div>
                                    <div class="col-2">
                                        <input type="file" class="form-control" class="w-10 p-3" name="fotoPrincipal">
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
</div>