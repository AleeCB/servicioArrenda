<div class="container">
    <h1>EDITAR PERFIL</h1>
    <div class="container">
        <form action="<?=base_url('index.php/ArrendatarioC/editarPerfil')?>" method="POST"></form>
        <label>Fecha de nacimiento:</label>
        <input type="date" class="forma-control" name="fechaNacimiento"
            value="<?=$arrendatarios[0]->fechaNacimiento?>"><br><br>
        <label>Correo electrónico:</label>
        <input type="text" class="forma-control" name="correo" value="<?=$arrendatarios[0]->correo?>"><br><br>
        <label>Credencial de estudiante:</label>
        <input type="file" class="forma-control" name="credencialEstudiante"
            value="<?=$arrendatarios[0]->credencialEstudiante?>"><br><br>
        <label>Lugar de origen:</label>
        <input type="text" class="forma-control" name="lugarOrigen" value="<?=$arrendatarios[0]->lugarOrigen?>"><br><br>
        <label>Foto:</label>
        <input type="file" class="forma-control" name="foto" value="<?=$arrendatarios[0]->foto?>"><br><br>
    </div>
    <button class="btn btn-primary" type="submit" value="Actualizar">GUARDAR</button>
    </form>
</div>