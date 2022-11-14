<div class="container">
    <div class="alert alert-dark" role="alert">
        <h1 class="text-center">Mi perfil</h1>
    </div>
    <div class="row">
        <div class="col-4">
            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135768.png" width="200" height="200">
        </div>
        <div class="col-4">
            <label class="text-center">idArrendatario</label><br>
            <label class="text-center">Nombre</label><br>*
            <label class="text-center">Apellido paterno</label><br>*
            <label class="text-center">Apellido materno</label><br>*
            <label class="text-center">Numero de teléfono</label><br>
            <label class="text-center">Fecha de nacimiento</label><br>
            <label class="text-center">Correo electrónico</label><br>*
            <label class="text-center">Contraseña</label><br>
            <label class="text-center">Credencial de estudiante</label><br>
            <label class="text-center">Lugar de origen</label><br>
            <label class="text-center">Foto</label><br>
        </div>
        <div class="col-4">
            <?php foreach($arrendatarios as $key): ?>
            <label><?=$key->idArrendatario?></label><br>
            <label><?=$key->nombre?></label><br>
            <label><?=$key->apellidoP?></label><br>
            <label><?=$key->apellidoM?></label><br>
            <label><?=$key->numeroTelefono?></label><br>
            <label><?=$key->fechaNacimiento?></label><br>
            <label><?=$key->correo?></label><br>
            <label><?=$key->contrasenia?></label><br>
            <label><?=$key->credencialEstudiante?></label><br>
            <label><?=$key->lugarOrigen?></label><br>
            <label><?=$key->foto?></label><br>
            <?php endforeach ?>
        </div>
    </div>
    <div class="d-grid gap-1 col-2 mx-auto">
        <a class="btn btn-dark" href="<?=base_url('index.php/ArrendatarioC/editarPerfil/')?>" type="button">EDITAR
            PERFIL
        </a>
    </div>
</div>