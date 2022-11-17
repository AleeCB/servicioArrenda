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
                    <a class="btn btn-success"
                        href="<?=base_url('index.php/PropiedadesC/editarPropiedad/').$key->idPropiedad?>">EDITAR
                    </a>

                    <a class="btn btn-danger"
                        href="<?=base_url('index.php/PropiedadesC/deletePropiedad/').$key->idPropiedad?>">ELIMINAR
                    </a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <div class="d-grid gap-1 col-2 mx-auto">
        <a class="btn btn-success" href="<?=base_url('index.php/PropiedadesC/insertarPropiedad/').$key->idPropiedad?>"
            type="button">AGREGAR PROPIEDAD
        </a>
    </div>
</div>