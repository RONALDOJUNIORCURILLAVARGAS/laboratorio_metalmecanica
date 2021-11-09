<?php
//include_once './settings/user_session.php';
//$userSession=new UserSession();
session_start();
if(isset($_SESSION['estado']) )
{
   header('location:./views/principal.php');
}
else{
  //require_once './views/acceso.php';  
  header('location:./views/login.php');
}

?>