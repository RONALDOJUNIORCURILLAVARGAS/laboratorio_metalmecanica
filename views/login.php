<?php 
session_start();
if(isset($_SESSION['estado']))
{
    
    if(isset($_SESSION['lista_usuario']))
    {
        header('location:../views/principal.php');
    //unset($_SESSION['lista_usuario']);
    } 
 
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="../src/styles/login.css" rel="stylesheet" type="text/css"/>
    <script src="../src/javascript/acceso_login.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    
</head>
<body>
    
<form name="form">
<input type="hidden" name="op">
  <div id="container_left">
      
    <div id="title">
      <img src="../src/images/icono.jpeg" style="width:1.5rem;height:1.5rem;"><span>Metalab</span>
    </div>
    <div id="title_2">
    <span>Desarrollo del proceso de mecanizado de metales del laboratorio Metalmecánica</span>
    </div>
    <div id="registros">
        <div id="form_usuario">
                <div class="form-floating mb-3">
                <input type="email" class="form-control" name="correo" id="floatingInput" placeholder="example@unfv.edu.pe">
                <label for="floatingInput">Correo institucional</label>
                </div>
                <div class="form-floating">
                <input type="password" class="form-control" name="clave" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Contraseña</label>
             </div>
        </div>
        <div id="botones">
            <div id="t_botones">
                <span >¿Eres nuevo?</span>
            </div>
            <div id="b_botones" >
                <div id="caja_btn_acceder">
                    <button id="btn_acceder" onclick="acceder();">
                       ACCEDER
                    </button>
                </div>
                <div id="caja_btn_registrar">
                    <button id="btn_registrar" onclick="registrar();">
                       REGISTRARSE
                    </button>
                </div>

            </div>

        </div>
       
    </div>
  </div>

    <div id="imagen_rigth">
    <img src="../src/images/login.jpg" style="width:100%;height:100%;"/>

    </div>
   
</form>
</body>
</html>

