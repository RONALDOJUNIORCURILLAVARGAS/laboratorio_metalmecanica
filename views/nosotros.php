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
    <title>Nosotro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../src/styles/principal.css" rel="stylesheet" type="text/css"/>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="../src/javascript/inicio.js"></script>
</head>
<body>
    <?php
     include './cabecera.php';
     ?>
    <div class="container" >
        <br>
        <div class="container text-center" style="background-color:none; ">
        	<div>
        		 <h1 style="color: black;">Nosotros</h1>
        	</div>
             
        </div>
        
        <div class="container text-center" style="background-color:none;width:800px;">
         <p>La Escuela Profesional de Ingeniería Industrial es uno de los Organos de Dirección de la Facultad encargada del diseño y la actualización del Currículo de la Carrera Profesional de Ingeniería Industrial, así como de dirigir su implementación, para la formación y capacitación, hasta la obtención del Grado Académico de Bachiller y Título Profesional correspondiente.
            Agrupa a los estudiantes de la Carrera Profesional de Ingeniería Industrial y a los docentes asignados a cada asignatura. Se encarga de gestionar los Estudios Generales y los Estudios de Pre Grado de la Carrera</p>
            <img src="http://www.unfv.edu.pe/facultades/fiis/images/logo/2018/noviembre/logo_real.png"/>
        </div>
        <br>
        <br>
        <div class="container text-center" style="background-color:none;width:100%; height:350px;padding:0;display:flex;">
            <div id="mision" style="width:50%;height:350px;background-color:none;padding-left:5rem;padding-right:5rem;">
                <div style="width:100%;height:50px;">
                    <h2 style="width:100%;">Misión</h2>
                </div>

                <img style="width:150px;height:150px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSi8T8MMrRlxFn4DyUjqsHAV1Q2yVsEvVPytQ&usqp=CAU"/>
                <p>"Brindar formación profesional científica y humanística a los estudiantes, con sensibilidad social, innovación, competitividad y emprendimiento, para contribuir al desarrollo y la sostenibilidad sistémica del país."</p>
            </div>
            <div id="vision" style="width:50%;height:350px;background-color:none;padding-left:5rem;padding-right:5rem;">
                <div style="width:100%;height:50px;">
                    <h2  style="width:100%;">Visión</h2>
                </div>
                <img style="width:150px;height:150px;" src=" https://cdn-icons-png.flaticon.com/512/437/437622.png" />
                <br>
                <p>"Comunidad académica posicionada entre las mejores universidades en el ámbito nacional e internacional a través de la calidad, producción y difusión intelectual e innovación con responsabilidad social."</p>
            </div>
        </div>
        <br>
        <div class="container text-center" style="background-color:none; ">
        	<div>
        		 <h1 style="color: black;">Desarrollado por : </h1>
        	</div>
             
        </div>
        <br>
        <div class="container text-center" style="background-color:none;width:100%; height:350px;padding:0;display:flex;">
            <div id="mision" style="width:50%;height:350px;background-color:none;padding-left:5rem;padding-right:5rem;">
                <div style="width:100%;height:50px;">
                    <h2 style="width:100%;">Programador</h2>
                </div>

                <img style="width:150px;height:150px;" src="http://assets.stickpng.com/images/585e4beacb11b227491c3399.png" />
                <h4>Ronaldo Junior Curilla Vargas</h4>
                <h5>2017008703@unfv.edu.pe</h5>
            </div>
            <div id="vision" style="width:50%;height:350px;background-color:none;padding-left:5rem;padding-right:5rem;">
                <div style="width:100%;height:50px;">
                    <h2  style="width:100%;">Analista</h2>
                </div>
                <img style="width:150px;height:150px;" src=" http://assets.stickpng.com/images/585e4beacb11b227491c3399.png" />
                <br>
                <h4>Jorge manuel arevalo luján</h4>
                <h5>2017001787@unfv.edu.pe</h5>
            </div>
        </div>
       
    </div>  
              
</body>
</html>
