<link rel="stylesheet" href="<?php echo APP_URL; ?>/../app/views/css/style.css">
<nav class="navbar navbar-expand-lg fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand me-auto" href="<?php echo APP_URL; ?>dashboard/">
            <div class="container">
                <img src="<?php echo APP_URL; ?>app/views/img/LogoRefugio.jpg" alt="" class="logo">
                Huellitas Caninas
            </div>   
        </a>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menú</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
                <a class="nav-link mx-lg-2" href="<?php echo APP_URL; ?>admindashboard/">admindashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="<?php echo APP_URL; ?>crudslider/">CRUD Slider</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="<?php echo APP_URL; ?>crudmascotas/">CRUD Mascotas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="<?php echo APP_URL; ?>cruddonacion/">CRUD Donativos</a>
              </li>
            </ul>
          </div>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>