<?php
//include_once './settings/user_session.php';
//$userSession=new UserSession();
session_start();
<<<<<<< HEAD
=======

>>>>>>> 1d84fa74443cd5ebeb8f73bcbe45a8d1805f73b6
if(isset($_SESSION['estado']) )
{
   header('location:./views/principal.php');
}
else{
  //require_once './views/acceso.php';  
  header('location:./views/login.php');
}

<<<<<<< HEAD
=======

>>>>>>> 1d84fa74443cd5ebeb8f73bcbe45a8d1805f73b6
?>

