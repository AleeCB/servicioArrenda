<div class="container">
    <h1>NUEVA PROPIEDAD</h1>
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
        <input type="text" class="form-control" name="nombre" class="w-10 p-3"><br>
        <label>Ubicación</label>
        <input type="text" class="form-control" name="ubicacion"><br>
        <label>Personas permitidas</label>
        <input type="number" class="form-control" name="numHabitantes"><br>
        <label>Precio</label>
        <input type="number" class="form-control" min="800" max="5000" name="precio"><br>
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
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary" type="submit">ENVIAR</button>
        </div>
    </form>
</div>