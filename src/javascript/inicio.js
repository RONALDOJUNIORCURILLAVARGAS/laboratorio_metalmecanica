function salir(){
    window.document.form.action="../controllers/control_login.php";
    window.document.form.method="POST";
    window.document.form.op.value="2";
    window.document.form.submit();
}