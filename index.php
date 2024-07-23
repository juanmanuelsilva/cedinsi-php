<?php
session_start();
$_SESSION['usuario'] = 'fosforo';
require_once("view/head/head.php");
?>

<div class="container-fluid  p-2 mb-3">
    <h3>Bienvenido al Sistema de Gestión de usuarios</h3>
</div>

<div class="container-fluid  p-2 mb-3">
    <a href="login.php" class="btn btn-primary">Ingresar</a>
</div>

<?php

require_once("view/head/footer.php");

?>