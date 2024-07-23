<?php

require_once("view/head/head.php");

$errLogin = "";
if (isset($_GET['validar_error'])) {
    if ($_GET['validar_error'] == 1) {
        $err_msg = "No se envió información";
    } elseif ($_GET['validar_error'] == 2) {
        $err_msg = "Usuario no hallado. Intente nuevamente";
    } else {
        $err_msg = "Password incorrecto. Intente nuevamente";
    }
}
$err_msg = "";
?>

<div class="container-fluid  p-2 mb-3">
    <h3>Sistema de Gestión de usuarios</h3>
</div>
<div class="text-danger"> <?php echo $err_msg; ?> </div>

</div>
<div class="container-fluid  p-2 mb-3">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Acceso Usuarios</h5>
            <form action="login_captura.php" method="POST">
                <div id="emailHelp" class="form-text">Ingrese sus credenciales para acceder al sistema.</div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" required name="username" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" required name="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Validar</button>
            </form>
        </div>
    </div>
</div>

<?php
require_once("view/head/footer.php");
?>