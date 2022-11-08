<div class="container">
    <h1 class="text-center">Casa</h1>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <table class="table table-striped table-bordered">
                    <thead class="table-primary">
                        <th class="text-center">Foto</th>
                        <th class="text-center">Nombre de la propiedad</th>
                        <th class="text-center">Ubicación</th>
                    <tbody class="table-default">
                        <?php foreach($propiedades as $key): ?>
                        <tr>
                            <td><?=$key->fotoPrincipal?></td>
                            <td><?=$key->nombre?></td>
                            <td><?=$key->ubicacion?></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                    </thead>
                </table>
            </div>
            <div class="col-4">
                <div class="justify-content-center">
                    <H1 class="text-center">Filtrar por...</H1>
                </div>
                <h2>Servicios</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Luz
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Agua
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Wi-fi
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Gas
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Comida
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Mantenimiento
                                </label>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Estacionamiento
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Limpieza
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Seguridad
                                </label>
                            </div>
                        </div>
                    </div>
                </div><br>
                <h2>Ubicación</h2>
                <div> <img src="https://programacion.net/files/article/article_02103_.jpg" alt="" width="350"
                        height="200"></div><br>
                <div class="d-flex align-items-center justify-content-center"><a class="btn btn-success btn-sm"
                        href="<?=base_url('index.php/PropiedadesC/insertarPropiedad/')?>">
                        BUSCAR</a>
                        <div>Nuevooooo</div>
                </div>
            </div>
        </div>
    </div>
</div>