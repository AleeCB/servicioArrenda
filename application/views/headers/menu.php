<nav class="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon"></span>
            </button>
            <img src="https://dewey.tailorbrands.com/production/brand_version_mockup_image/281/7826038281_05bdbfb5-ba7b-4213-9e02-3488afd0c93c.png?cb=1667763509"
                width="220" height="40" class="d-inline-block align-text-top">
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                aria-labelledby="offcanvasExampleLabel" style="color: white; background-color: #103263;">
                <div class="offcanvas-header" style="color: white; background-color: #31AFB4;">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menú</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="dropdown mt-3">
                    <a class="btn btn-lg" style="color: white;" href="<?=base_url('index.php/ArrendatarioC/show/')?>"
                        role="button"> <img src="https://cdn-icons-png.flaticon.com/128/1946/1946429.png" alt=""
                            width="50" height="50">Perfil</a>
                </div>
                <div class=" dropdown mt-3">
                    <a class="btn btn-lg" style="color: white;" href="<?=base_url('index.php/PropiedadesC/show/')?>"
                        role="button">
                        <img src="https://cdn-icons-png.flaticon.com/128/845/845022.png" alt="" width="40"
                            height="40">Mis propiedades</a>
        </a>
    </div>
    <div class="dropdown mt-3">
        <a class="btn btn-lg" style="color: white;" href="<?=base_url('index.php/ReservasC/show/')?>" role="button">
            <img src="https://cdn-icons-png.flaticon.com/128/5576/5576900.png" alt="" width="50"
                height="50">Reservas</a>
    </div>
    </div>
    </a>
    <div>
        <div class="btn-group">
            <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false">
                Pedro
            </button>
            <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item" href=" <?=base_url('index.php/ArrendatarioC/editarPerfil/')?>">Perfil
                    </a>
                </li>
                <a class="dropdown-item" href=" <?=base_url('index.php/PrincipalC/major/')?>">Cerrar sesión
            </ul>
        </div>
    </div>
    </div>
</nav>