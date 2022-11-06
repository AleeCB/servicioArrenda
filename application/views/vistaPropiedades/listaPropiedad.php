<div class="container">
    <h1 class="text-center">Mis propiedades</h1>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        AGREGAR PROPIEDAD
    </button>
    <table class="table table-striped table-bordered">
        <thead class="table-primary">
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
        <tbody class="table-default">
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
                <td><a class="btn btn-warning btn-sm"
                        href="<?=base_url('index.php/PropiedadesC/editarPropiedad/').$key->idPropiedad?>">EDITAR</a>
                    <a class="btn btn-danger btn-sm"
                        href="<?=base_url('index.php/PropiedadesC/eliminarPropiedad/').$key->idPropiedad?>">ELIMINAR</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
        </thead>
    </table>
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
                            <input type="text" class="form-control" name="Nombre" class="w-10 p-3"><br>
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
                                <option value="Computadora portátil">Casa</option>
                                <option value="PC de escritorio">Cuarto</option>
                                <option value="PC gamming">Pensión</option>
                                <option value="Chromebook">Departamento</option>
                            </select><br>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" type="button">CANCELAR</button>
                    <button class="btn btn-success" type="submit">ENVIAR</button>
                </div>
            </div>
        </div>
    </div>
</div>