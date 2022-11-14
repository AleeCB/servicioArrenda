<div class="container">
    <?php echo validation_errors(); ?>
    <form action="<?=base_url('index.php/PropiedadesC/editarPropiedad/').$propiedades[0]->idPropiedad?>" method="POST">
        <label>Nombre de la propiedad :</label>
        <input type="text" class="forma-control" name="nombre" value="<?=$propiedades[0]->nombre?>"><br><br>
        <label>Ubicacion:</label>
        <input type="text" class="forma-control" name="ubicacion" value="<?=$propiedades[0]->ubicacion?>"><br><br>
        <label>Número de habitantes:</label>
        <input type="number" class="forma-control" name="numHabitantes"
            value="<?=$propiedades[0]->numHabitantes?>"><br><br>
        <label>Precio:</label>
        <input type="number" class="forma-control" name="precio" value="<?=$propiedades[0]->precio?>"><br><br>
        <label>Estatus:</label>
        <input type="text" class="forma-control" name="estatus" value="<?=$propiedades[0]->estatus?>"><br><br>
        <label>Amueblado:</label>
        <input type="text" class="forma-control" name="amueblado" value="<?=$propiedades[0]->amueblado?>"><br><br>
        <label>Tipo de propiedad:</label>
        <input type="text" class="forma-control" name="tipoPropiedad"
            value="<?=$propiedades[0]->tipoPropiedad?>"><br><br>
        <label>Foto principal:</label>
        <input type="file" class="forma-control" name="fotoPrincipal"
            value="<?=$propiedades[0]->fotoPrincipal?>"><br><br>
        <input type="submit" value="Actualizar">
    </form>
</div>