<section>
    <header class="py-3 border-bottom">
      <div class="container-fluid d-flex flex-wrap justify-content-center">
        <a href="/" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
          <img src="{{asset('img/Logo 1.png')}}" width="100px" height="100px" alt="">
          <span class="fs-4">Lescay-JALM</span>
        </a>
        <form class="col-12 col-lg-auto mb-3 mb-lg-0" role="search">
          <input type="search" class="form-control" placeholder="Buscar..." aria-label="Search">
        </form>
      </div>
    </header>
    <nav class="navbar navbar-expand-md navbar-dark bg-success" aria-label="Fourth navbar example">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarsExample04">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('/')}}">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{route('quienes-somos')}}">Quienes Somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Destino Animal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active href="#">Agricultura</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active href="#">Humanos</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Desarrollo Sostenible</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">I+D+I</a></li>
                <li><a class="dropdown-item" href="#">Tecnologia</a></li>
                <li><a class="dropdown-item" href="#">Diseño</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link active href="#">Tienda Virtual</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active href="#">Contáctenos</a>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="#">Iniciar Sesion</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </section>