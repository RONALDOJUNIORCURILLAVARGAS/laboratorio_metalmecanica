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
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="../src/styles/login.css" rel="stylesheet" type="text/css"/>
    <script src="../src/javascript/acceso_login.js"></script>
</head>
<style type="text/css">
table { border: 1px solid black 
    }
.sinborde {border:0;}
.button{text-decoration:none; text-align:center; 
 padding:11px 32px; 
 border:solid 1px #000000; 
 -webkit-border-radius:6px;
 -moz-border-radius:6px; 
 border-radius: 6px; 
 font:15px "Arial Black", Gadget, sans-serif; 
 font-weight:bold; 
 color:#093b3b; 
 background:#ffffff; 
 -webkit-box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #400000; 
 -moz-box-shadow: 0px 0px 2px #bababa,  inset 0px 0px 1px #400000;  
 box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #400000;  
  
  }.button:hover{
 padding:11px 32px; 
 border:solid 1px #000000; 
 -webkit-border-radius:4px;
 -moz-border-radius:4px; 
 border-radius: 4px; 
 font:21px "Arial Black", Gadget, sans-serif; 
 font-weight:bold; 
 color:#093b3b; 
 background-color:#3BA4C7; 
 background-image: -moz-linear-gradient(top, #3BA4C7 0%, #1982A5 100%); 
 background-image: -webkit-linear-gradient(top, #3BA4C7 0%, #1982A5 100%); 
 background-image: -o-linear-gradient(top, #3BA4C7 0%, #1982A5 100%); 
 background-image: -ms-linear-gradient(top, #3BA4C7 0% ,#1982A5 100%); 
 filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1982A5', endColorstr='#1982A5',GradientType=0 ); 
 background-image: linear-gradient(top, #3BA4C7 0% ,#1982A5 100%);   
 -webkit-box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #400000; 
 -moz-box-shadow: 0px 0px 2px #bababa,  inset 0px 0px 1px #400000;  
 box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #400000;  
  
 }.button:active{
 padding:11px 32px; 
 border:solid 1px #000000; 
 -webkit-border-radius:4px;
 -moz-border-radius:4px; 
 border-radius: 4px; 
 font:21px "Arial Black", Gadget, sans-serif; 
 font-weight:bold; 
 color:#093b3b; 
 background-color:#3BA4C7; 
 background-image: -moz-linear-gradient(top, #3BA4C7 0%, #1982A5 100%); 
 background-image: -webkit-linear-gradient(top, #3BA4C7 0%, #1982A5 100%); 
 background-image: -o-linear-gradient(top, #3BA4C7 0%, #1982A5 100%); 
 background-image: -ms-linear-gradient(top, #3BA4C7 0% ,#1982A5 100%); 
 filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1982A5', endColorstr='#1982A5',GradientType=0 ); 
 background-image: linear-gradient(top, #3BA4C7 0% ,#1982A5 100%);   
 -webkit-box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #400000; 
 -moz-box-shadow: 0px 0px 2px #bababa,  inset 0px 0px 1px #400000;  
 box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #400000;  
  
 }

 .button2{text-decoration:none; text-align:center; 
 padding:0px 35px; 
 border:none; 
  
 font:11px Verdana, Geneva, sans-serif; 
 font-weight:bold; 
 color:#000505; 
 background:#ffffff; 
 -webkit-box-shadow:0px 0px -20px #ffffff, inset 0px 0px 1px #ffffff; 
 -moz-box-shadow: 0px 0px -20px #ffffff,  inset 0px 0px 1px #ffffff;  
 box-shadow:0px 0px -20px #ffffff, inset 0px 0px 1px #ffffff;  
  
  }.button:hover2{
 padding:11px 32px; 
 border:solid 1px #ffffff; 
 -webkit-border-radius:4px;
 -moz-border-radius:4px; 
 border-radius: 4px; 
 font:14px Verdana, Geneva, sans-serif; 
 font-weight:bold; 
 color:#E5FFFF; 
 background:#ffffff; 
 -webkit-box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #ffffff; 
 -moz-box-shadow: 0px 0px 2px #bababa,  inset 0px 0px 1px #ffffff;  
 box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #ffffff;  
  
 }.button:active2{
 padding:11px 32px; 
 border:solid 1px #ffffff; 
 -webkit-border-radius:4px;
 -moz-border-radius:4px; 
 border-radius: 4px; 
 font:14px Verdana, Geneva, sans-serif; 
 font-weight:bold; 
 color:#E5FFFF; 
 background:#ffffff; 
 -webkit-box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #ffffff; 
 -moz-box-shadow: 0px 0px 2px #bababa,  inset 0px 0px 1px #ffffff;  
 box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #ffffff;  
  
 }

.login {
  margin:0 auto;
  max-width:500px;
}
 </style>   
<body>
<form name="form">
<input type="hidden" name="op">
    <div class="container">
        <div class="row">
            <img src="../src/images/login.jpg" align="right" style="width: 50%" height="700p">
            <img src="../src/images/indus.jpg" align="center" style="width: 50%" height="700p">
            <font color="435853" face="Georgia" size="5" >
             <li></li>
             <li></li>  
             <li></li>  
             <li></li> 
             <blockquote>  
                
            <p style= "margin-top: -756px; margin-left: 80px;" > Desarrollo del proceso de</p>
            <p style= "margin-left: 80px;"> mecanizado de metales del</p>
            <p style= "margin-left: 80px;"> laboratorio de Metalmecánica</p></font></blockquote>
            <input type="text" name="correo" style="width: 27%; margin-left: 100px;" class="login" border: 2px; border-heigh solid; placeholder="Correo Electronico"> 
            <input type="password" border: 2px solid name="clave" style="width: 27%; margin-left: 100px;" placeholder="Contraseña">
                <br></br>
                <a href="#" class="button2" style="margin-left: 92px;"/>Recuerdame</a>
                <a href="#" class="button2" style="margin-left: 120px;"/>¿Olvidaste tu contraseña?</a>
                <br></br>
                <br></br>
                <a href="#" class="button2" style="margin-left: 400px;"/>Eres nuevo</a>
                <br></br>
                <a href="#" style="margin-left: 110px;" class="button"/>Acceder</a>
                &nbsp;<a class="button" href="#" style="margin-left: 140px;">Registrarse</a>
        </div>
    </div>
</form>
</body>
</html>

