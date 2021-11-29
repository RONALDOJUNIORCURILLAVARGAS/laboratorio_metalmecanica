<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black;">
  <div class="container-fluid">
    <div style="width: 100px; height:20px;"></div>
    <img src="../src/images/icon.jpeg" width="20" height="20"/>
    <a class="navbar-brand" href="../index.php"><h4 style="margin:0;">METALAB</h3></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item" >
          <a class="nav-link active" aria-current="page" href="../index.php">Inicio</a>
        </li>
        <!--
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Servicios
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
-->
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./nosotros.php">Nosotros</a>
        </li>
      </ul>
      <form class="d-flex" name="form">
      <input type="hidden" name="op">
      <input type="hidden" name="idmaterial">
      <input type="hidden" name="nombrematerial">
      <input type="hidden" name="idherramienta">
      <input type="hidden" name="nombreherramienta">
      <input type="hidden" name="valorejecucion">
      <input type="hidden" name="idproyecto">
      <input type="hidden" name="codigografico">
      <input type="hidden" name="nombrenuevoproyecto">
       <!-- <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">-->
        <button class="btn btn-outline-light" type="submit" onclick="salir()">Salir</button>
      </form>
    </div>
  </div>
</nav>