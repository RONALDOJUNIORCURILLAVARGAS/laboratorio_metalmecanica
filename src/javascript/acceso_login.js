function acceder() {
    window.document.form.action="../controllers/control_login.php";
    window.document.form.method="POST";
    window.document.form.op.value="1";
    window.document.form.submit();
 
}

function registrar() {
    window.document.form.action="../controllers/control_login.php";
    window.document.form.method="POST";
    window.document.form.op.value="3";
    window.document.form.submit();
}