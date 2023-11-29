<nav class="navbar bg-warning" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Biblio-Laravel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('apodoInicio')?'text-success-emphasis':'' }}" aria-current="page" href="/Inicio">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('apodoRegistro')?'text-success-emphasis':'' }} " href="/Registro">Registro</a>
            </li>
          </ul>
        </div>
      </div>
  </nav>