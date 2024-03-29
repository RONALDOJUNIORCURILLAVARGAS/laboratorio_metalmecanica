<?php
 session_start();
 if(isset($_SESSION['estado']))
 {
    $lista_usuario=$_SESSION['lista_usuario'];

    if(isset($_SESSION['lista_proyectos'])){
      $lista_proyectos=$_SESSION['lista_proyectos'];
    }
    //unset($_SESSION['estado']);
 }
 else{
  header('location:../');
 }
 if(isset($_SESSION['lista_dimensiones']))
 {
   unset($_SESSION['lista_dimensiones']);
 }
 if(isset($_SESSION['lista_configherramienta'])){
 unset($_SESSION['lista_configherramienta']);
}
if(isset($_SESSION['nombre_herramienta_seleccionado'])){
 unset($_SESSION['nombre_herramienta_seleccionado']);
}
if(isset($_SESSION['grafico_material'])){
  unset($_SESSION['grafico_material']);
}
  
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../src/styles/principal.css" rel="stylesheet" type="text/css"/>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="../src/javascript/inicio.js"></script>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black;">
  <div class="container-fluid">
    <div style="width: 100px; height:20px;"></div>
    <img src="../src/images/icon.jpeg" width="20" height="20"/>
    <a class="navbar-brand" style="cursor:pointer;" onclick="principal();"><h4 style="margin:0;">METALAB</h3></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" style="cursor:pointer;" onclick="principal();">Inicio</a>
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
      <input type="hidden" name="idproyecto">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-light" type="submit" onclick="salir()">Salir</button>
      </form>
    </div>
  </div>
</nav>
<div class="proyectos" >
    <div class="proyectos_card">
    <button type="button" onclick="registrar_proyecto();" class="btn btn-secondary" id="add_project">Nuevo proyecto</button>
    <div id="carrusel_project">
     
        <ul id="car_caj_p">
          <?php if(isset($lista_proyectos)){
                foreach ($lista_proyectos as $value) {   ?>
                     <li class="caja_projects" onclick="acceder_proyecto(<?php echo $value['id_proyecto']; ?>);" >
                    <img src="../src/images/cortado.jpeg"    style="width:10rem; height:10rem"/>
                    <span class="title_project" > <?php echo $value['nombre_proyecto']; ?> </span>
                    </li>    
          <?php } }  ?>
         

        </ul>
      
    </div>
    </div>
</div>
<div class="videos" >
    <div class="videos_card">
        <div id="head_card_vid"><span>¿Desea ver otras cosas?</span>
      </div>
    <div id="carrusel_videos">
            <ul id="car_caj_v">
              <li class="caja_videos">  
              <img src="../src/images/engranaje.png"   style="width:14rem; height:14rem"/>
              
              </li>
              <li class="caja_videos">
              <iframe style="  width: 16rem; height: 10rem;" src="https://www.youtube.com/embed/p0yagAEMt8g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <span class="txt_title_vid">Corte y doblado de tuberias</span><br>
              <a href="https://www.youtube.com/embed/p0yagAEMt8g">Ver video</a>
              </li>
              <li class="caja_videos">
              <iframe style="  width: 16rem; height: 10rem;"src="https://www.youtube.com/embed/KaWrdj63m7U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <span class="txt_title_vid">Soldadura de tuberias</span><br>
              <a href="https://www.youtube.com/embed/KaWrdj63m7U">Ver video</a>
              </li>
              <li class="caja_videos" >
              <img align="right"  src="../src/images/metalmecanica.png"   style="width:5rem; height:5rem;position: relative;margin-top:8rem; right: 0px;bottom: 0px;" />
              
              </li>
            </ul>
        </div>

    </div>
    
</div>
<!--
    <?php foreach ($lista_usuario as $value) {?>
    <h2 ><?php echo $value['nombre'],' ',$value['apellido'] ;?></h2>
  
    <?php } ?>

    <?php if(isset($lista_proyectos)){foreach ($lista_proyectos as $value) { ?>
      <h2 ><?php echo $value['nombre_proyecto'],' ',$value['correo'] ;?></h2>
    
    <?php } } ?>

    -->         
</body>
</html>
