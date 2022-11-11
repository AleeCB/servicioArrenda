<div class="container">
    <table class="table table-bordered">
        <h1 class="text-center">Mis reservas</h1>
        <thead class="table-success">
            <th class="text-center">idArrendatario</th>
            <th class="text-center">idPropiedad</th>
            <th class="text-center">Nombre de la propiedad</th>
            <th class="text-center">Fecha inicio</th>
            <th class="text-center">Fecha fin</th>
            <th class="text-center">Número de huésped</th>
        <tbody class="table-light" class="text-center">
            <?php foreach($reservas as $key): ?>
            <tr>
                <td><?=$key->idArrendatario?></td>
                <td><?=$key->idPropiedad?></td>
                <td></td>
                <td><?=$key->fechaInicio?></td>
                <td><?=$key->fechaFin?></td>
                <td><?=$key->numHuesped?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
        </thead>
    </table>
</div>