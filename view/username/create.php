<?php

require_once("c://wamp64/www/cedinsi/proyecto/controller/usernameController.php");
$obj = new usernameController();

require_once("../head/head.php");

?>

<h2>CREAR USUARIO</h2>

<form action="store.php" method="POST">
    <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" required class="form-control" name="username" id="username">
    </div>

    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" required class="form-control" name="name" id="name">
    </div>

    <div class="mb-3">
        <label fclass="form-label">Email address</label>
        <input type="email" required class="form-control" name="email" id="email">
    </div>

    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" required class="form-control" name="password" id="password">
    </div>
    <button type="submit" class="btn btn-primary">Agregar</button>
    <a class="btn btn-danger" href="index.php">Cancelar</a>
</form>

<?php
require_once("../head/footer.php");
?>