<div class="container">
    <h1 class="text-center">Mi perfil</h1>
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
    <!-- Button trigger modal -->
    <div class="d-grid gap-2 col-6 mx-auto">
        <p class="text-center"><button type="button" class="btn btn-success"
                class="d-grid gap-1 d-md-block col-1 mx-auto" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                EDITAR PERFIL
        </p>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">MI PERFIL</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <p>Fecha de nacimiento: <?=$arrendatarios[0]->fechaNacimiento?></p>
                        <p>Correo electrónico: <?=$arrendatarios[0]->correo?></p>
                        <p>Credencial de estudiante: <?=$arrendatarios[0]->credencialEstudiante?></p>
                        <p>Lugar de origen: <?=$arrendatarios[0]->lugarOrigen?></p>
                        <p>Foto: <?=$arrendatarios[0]->foto?></p>
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
</div>