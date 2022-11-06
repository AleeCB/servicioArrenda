<div class="container">

    <a class="btn btn-success" href="<?=base_url('index.php/PropiedadesC/insertarPropiedad/')?>">AGREGAR
        PROPIEDAD</a>

    <table class="table table-striped table-bordered">
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
        <tbody class="table-primary">
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
                <td><a class="btn btn-success btn-sm"
                        href="<?=base_url('index.php/PropiedadesC/editarPropiedad/').$key->idPropiedad?>">EDITAR</a>
                    <a class="btn btn-danger btn-sm"
                        href="<?=base_url('index.php/PropiedadesC/eliminarPropiedad/').$key->idPropiedad?>">ELIMINAR</a>
                </td>

            </tr>
            <?php endforeach ?>
        </tbody>
        </thead>
    </table>
</div>