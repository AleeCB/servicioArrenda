<style>
.xd {
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1>NUEVA RESERVA</h1>
            <?php echo validation_errors(); ?>
            <form action="<?=base_url('index.php/ReservaPrincipalC/insertarReserva')?>" method="POST">
                <div class="container">
                    <div class="row">
                        <div class="col-8">
                            <label>Fecha Inicio:</label>
                            <input type="date" class="form-control" class="w-10 p-3" name="fechaInicio">

                        </div>
                        <div class="row">
                            <div class="col-8">
                                <label>Fecha fin:</label>
                                <input type="date" class="form-control" class="w-10 p-3" name="fechaFin">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <label>Numero Habitantes:</label>
                                <input type="number" class="form-control" class="w-10 p-3" name="numHabitantes">

                            </div>
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <a class="btn btn-primary btn-lg" class="xd"
                                href="<?=base_url('index.php/ReservasC/insertarReserva/')?>" role="button">Hacer Reserva</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>