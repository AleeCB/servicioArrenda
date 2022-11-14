<div class="container">
    <table class="table table-bordered">
        <div class="alert alert-primary" role="alert">
            <h1 class="text-center">Mis propiedades</h1>
        </div>
        <thead class="table" style="background-color: #09506C">
            <th class="text-white" style="text-center">Id</th>
            <th class="text-white" style="text-center">Nombre de la propiedad</th>
            <th class="text-white" style="text-center">Ubicación</th>
            <th class="text-white" style="text-center">Número de habitantes</th>
            <th class="text-white" style="text-center">Precio</th>
            <th class="text-white" style="text-center">Estatus</th>
            <th class="text-white" style="text-center">Amueblado</th>
            <th class="text-white" style="text-center">Tipo de propiedad</th>
            <th class="text-white" style="text-center">Foto</th>
            <th class="text-white" style="text-center">Acción</th>
        </thead>
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
                    <a class="btn btn-info"
                        href="<?=base_url('index.php/PropiedadesC/editarPropiedad/').$key->idPropiedad?>">EDITAR
                    </a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <a class="btn btn-info" href="<?=base_url('index.php/PropiedadesC/insertarPropiedad/').$key->idPropiedad ?>"
        type="button">AGREGAR PROPIEDAD
    </a>
</div>

<!-- Modal 
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
    </div>-->