<div class="container">
    <table class="table table-bordered">
        <div class="alert alert-warning" role="alert">
            <h1 class="text-center">Mis reservas</h1>
        </div>
        <thead class="table" style="background-color: #F1CB27">
            <th class="text-black text-center">idArrendatario</th>
            <th class="text-black text-center">idPropiedad</th>
            <th class="text-black text-center">Nombre de la propiedad</th>
            <th class="text-black text-center">Fecha de inicio</th>
            <th class="text-black text-center">Fecha de fin</th>
            <th class="text-black text-center">Número de huéspedes</th>
        <tbody class="table-light text-center">
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