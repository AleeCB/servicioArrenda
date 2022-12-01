<div class="container">
    <table class="table table-bordered"> <br>
        <h1 class="alert alert-primary text-center" role="alert">
            Mis propiedades
        </h1>
        <thead class="table" style="background-color: #155772;">
            <th class="text-center" style="color: white;">Id</th>
            <th class="text-center" style="color: white;">Nombre de la propiedad</th>
            <th class="text-center" style="color: white;">Ubicación</th>
            <th class="text-center" style="color: white;">Número de habitantes</th>
            <th class="text-center" style="color: white;">Precio</th>
            <th class="text-center" style="color: white;">Estatus</th>
            <th class="text-center" style="color: white;">Amueblado</th>
            <th class="text-center" style="color: white;">Tipo de propiedad</th>
            <th class="text-center" style="color: white;">Foto</th>
            <th class="text-center" style="color: white;">Acción</th>
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
                <td><a class="btn btn-info btn-sm"
                        href="<?=base_url('index.php/PropiedadesC/editarPropiedad/').$key->idPropiedad?>">EDITAR</a>
                    <a class="btn btn-danger btn-sm"
                        href="<?=base_url('index.php/PropiedadesC/eliminarPropiedad/').$key->idPropiedad?>">ELIMINAR</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
        </thead>
    </table>
    <!-- Button trigger modal -->

    <a href="<?=base_url('index.php/PropiedadesC/insertarPropiedad')?>" class="btn btn-success">AGREGAR PROPIEDAD</a>