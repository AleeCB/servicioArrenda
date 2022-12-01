<div class="container">
    <form action="<?=base_url('index.php/PropiedadesC/editarPropiedad').$propiedades[0]->idPropiedad?>" method="POST">
        <label>Nombre de la propiedad :</label>
        <input type="text" class="form-control" name="nombre" value="<?=$propiedades[0]->nombre?>"><br><br>
        <label>Ubicacion:</label>
        <input type="text" class="form-control" name="ubicacion" value="<?=$propiedades[0]->ubicacion?>"><br><br>
        <label>Número de habitantes:</label>
        <input type="number" class="form-control" name="numHabitantes"
            value="<?=$propiedades[0]->numHabitantes?>"><br><br>
        <label>Precio:</label>
        <input type="number" class="form-control" name="precio" value="<?=$propiedades[0]->precio?>"><br><br>
        <label>Estatus:</label>
        <select name="estatus" id="" class="form-control">
            <option value="1">Disponible</option>
            <option value="2">No disponible</option>
        </select value="<?=$propiedades[0]->estatus?>"><br><br>
        <label>Amueblado:</label>
        <select name="amueblado" id="" class="form-control">
            <option value="1">Amueblado</option>
            <option value="2">No amueblado</option>
        </select value="<?=$propiedades[0]->amueblado?>"><br><br>
        <label>Tipo de propiedad:</label>
        <select name="tipoPropiedad" id="" class="form-control">
            <option value="1">Casa</option>
            <option value="2">Pensión</option>
            <option value="3">Cuarto</option>
            <option value="4">Departamento</option>
        </select value="<?=$propiedades[0]->tipoPropiedad?>"><br><br>
        <label>Foto principal:</label>
        <input type="file" class="form-control" name="fotoPrincipal"
            value="<?=$propiedades[0]->fotoPrincipal?>"><br><br>
        <input type="submit" value="Actualizar">
    </form>
</div>