<div class="container">
    <h1 class="text-center">Mis propiedades</h1>
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
                <td><a class="btn btn-info btn-sm"
                        href="<?=base_url('index.php/PropiedadesC/editarPropiedad/').$key->idPropiedad?>">EDITAR</a>
                    <a class="btn btn-danger btn-sm"
                        href="<?=base_url('index.php/PropiedadesC/eliminarPropiedad/').$key->idPropiedad?>">ELIMINAR</a>
                </td>
            <!-- d -->
            </tr>
            <?php endforeach ?>
        </tbody>
        </thead>
    </table>
    <div class="d-flex align-items-center justify-content-center"><a class="btn btn-success btn-sm"
            href="<?=base_url('index.php/PropiedadesC/insertarPropiedad/')?>">AGREGAR
            PROPIEDAD</a></div>