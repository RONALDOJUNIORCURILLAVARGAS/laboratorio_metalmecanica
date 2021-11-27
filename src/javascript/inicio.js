function salir(){
    window.document.form.action="../controllers/control_login.php";
    window.document.form.method="POST";
    window.document.form.op.value="2";
    window.document.form.submit();
}
function acceder_proyecto() {
  
   
    window.document.form.action="../controllers/control_acceder_proyecto.php";
    window.document.form.method="POST";
    window.document.form.op.value="2";
    window.document.form.submit();
}
