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
        <!-- Botón para lo del perfil -->

        <a class="btn outline-dark btn-lg" href="<?=base_url('index.php/PrincipalC/major/')?>" role="button"><svg
                xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                class="bi bi-person-circle" viewBox="0 0 16 16">
                <title>Cerrar sesión</title>
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd"
                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg></a>


    </div>
    </div>
    </div>
</nav>