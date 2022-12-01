<div class="container">
    <h1>NUEVA PROPIEDAD</h1>
    <form action="<?=base_url('index.php/PropiedadesC/editarPropiedad/').$propiedades[0]->idPropiedad ?>" method="POST">
        <div class="container">
            <div class="row">
                <div class="col-1">
                </div>
                <input type="hidden" name="idArrendador" value="<?$this->session->userdata('idArrendador')?>">
                <div class=" col-2">
                    <input type="file" class="form-control" class="w-10 p-3" name="fotoPrincipal">
                    <label>Foto principal</label>
                </div>
                <div class="col-2">
                    <input type="file" class="form-control" class="w-10 p-3" name="foto1">
                    <label>Foto 1</label>
                </div>
                <div class="col-2">
                    <input type="file" class="form-control" class="w-10 p-3" name="foto2">
                    <label>Foto 2</label>
                </div>
                <div class="col-2">
                    <input type="file" class="form-control" class="w-10 p-3" name="foto3">
                    <label>Foto 3</label>
                </div>
                <div class="col-2">
                    <input type="file" class="form-control" class="w-10 p-3" name="foto4">
                    <label>Foto 4</label>
                </div>
                <div class="col-1">
                </div>
            </div>
        </div>
        <label>Nombre</label>
        <input type="text" class="form-control" name="nombre" class="w-10 p-3" value="<?=$propiedades[0]->nombre?>"><br>
        <label>Ubicación</label>
        <input type=" text" class="form-control" name="ubicacion" value="<?=$propiedades[0]->ubicacion?>"><br>
        <label>Personas permitidas</label>
        <input type="number" class="form-control" name="numHabitantes" value="<?=$propiedades[0]->numHabitantes?>"><br>
        <label>Precio</label>
        <input type="number" class="form-control" min="800" max="5000" name="precio"
            value="<?=$propiedades[0]->precio?>">
        <input class="form-check-input" type="checkbox" class="form-control" name="estatus"
            value="<?=$propiedades[0]->estatus?>">
        <label class="form-check-label">Disponible</label><br>
        <input class="form-check-input" type="checkbox" class="form-control" name="amueblado"
            value="<?=$propiedades[0]->amueblado?>">
        <label class="form-check-label">Amueblado</label></br>
        <label for="">Tipo de propiedad: </label>
        <select class="input is-large" name="tipoPropiedad" id="">
            <option value="Casa">Casa</option>
            <option value="Cuarto">Cuarto</option>
            <option value="Pensión">Pensión</option>
            <option value="Departamento">Departamento</option>
        </select value="<?=$propiedades[0]->tipoPropiedad?>"><br>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary" type="submit">ENVIAR</button>
        </div>
    </form>
</div>