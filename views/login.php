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
.button {
    display: inline-block;
    text-align: center;
    vertical-align: middle;
    padding: 12px 24px;
    border: 1px solid #000000;
    border-radius: 8px;
    background: #ffffff;
    background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#ffffff));
    background: -moz-linear-gradient(top, #ffffff, #ffffff);
    background: linear-gradient(to bottom, #ffffff, #ffffff);
    font: normal normal bold 20px arial;
    color: #111111;
    text-decoration: none;
}
.button:hover,
.button:focus {
    color: #111111;
    text-decoration: none;
}
.button:active {
    background: #b3b3b3;
    background: -webkit-gradient(linear, left top, left bottom, from(#b3b3b3), to(#ffffff));
    background: -moz-linear-gradient(top, #b3b3b3, #ffffff);
    background: linear-gradient(to bottom, #b3b3b3, #ffffff);
}    
 </style>   
<body>
<form name="form">
    <div class="container">
        <div class="row">
            <img src="../src/images/login.jpg" align="right" style="width: 50%" height="750p">
            <font color="435853" face="Georgia" size="5" >
             <li></li>
             <li></li>  
             <li></li>  
             <li></li> 
             <blockquote>  
                 
            <p> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Desarrollo del proceso de</p>
            <p> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;mecanizado de metales del</p>
            <p> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;laboratorio de Metalmecánica</p></font></blockquote>
           <br></br><table style="width: 20%">
                <tr>    
                    <td>Correo Electronico</td>
              
                    <td><input type="text" class="sinborde" name="correo" style="width: 97%"></td>
                </tr>
                <tr>    
                    <td>Contraseña</td></tr>
                    <tr>
                <td><input type="password" class="sinborde" name="contraseña" style="width: 97%"></td>
                </tr>  
                     
                </table>
                <br></br>
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button type="button" style="background-color:rgb(255, 255, 255)">Recuerdame</button>
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" style="background-color:rgb(255, 255, 255)">¿Olvidaste tu contraseña?</button> 
                <br></br>
                <br></br>
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" style="background-color:rgb(255, 255, 255)">¿Eres nuevo?</button>
                <br></br>
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a class="button" onclick="acceder()" >Acceder</a>
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="button" href="#">Registrarse</a>
        </div>
    </div>
</form>
</body>
</html>

