<nav class="navbar" style="background-color: #155772;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon"></span>
            </button>
            <img src="https://dewey.tailorbrands.com/production/brand_version_mockup_image/742/7947075742_f01d45f9-8f6e-4b54-b12f-ff95d000250b.png?cb=1669146189"
                width="220" height="40" class="d-inline-block align-text-top">
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                aria-labelledby="offcanvasExampleLabel" style="color: white; background-color: #155772;">
                <div class="offcanvas-header" style="color: white; background-color: #31AFB4;">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menú</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="dropdown mt-3">
                    <a href="index.php/PropiedadesC/perfil" type="button" class="btn btn-lg" style="color: white;">
                        Perfil
                    </a>
                </div>
                <div class=" dropdown mt-1">
                    <a href="index.php/PropiedadesC/perfil" type="button" class="btn btn-lg" style="color: white;">
                        Mis propiedades
                    </a>
                </div>
                <div class="dropdown mt-1">
                    <a href="index.php/ReservasC/show" type="button" class="btn btn-lg" style="color: white;">
                        Reservas
                    </a>
                </div>
            </div>
        </a>
        <!-- Botón para lo del perfil -->
        <div class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                    class="bi bi-person-circle" viewBox="0 0 16 16" style="color: white">
                    <title>Iniciar sesión</title>
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                </svg>
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Perfil</a></li>
                <li><a class="dropdown-item" href="<?=base_url('index.php/PrincipalC/major')?>">Cerrar sesión</a></li>
            </ul>
        </div>
    </div>
</nav>