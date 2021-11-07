<?php
//include_once './settings/user_session.php';
//$userSession=new UserSession();
session_start();

<<<<<<< HEAD
=======

>>>>>>> 618c4393a94ae8fbb122005c70a5264ebf023289
if(isset($_SESSION['estado']) )
{
   header('location:./views/principal.php');
}
else{
  //require_once './views/acceso.php';  
  header('location:./views/login.php');
}

<<<<<<< HEAD
?>

=======
?>
>>>>>>> 618c4393a94ae8fbb122005c70a5264ebf023289
