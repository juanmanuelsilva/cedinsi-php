<?php

require_once("c://wamp64/www/cedinsi/proyecto/controller/usernameController.php");
$obj = new usernameController();

$id_user = $_GET['id'];
//print_r($id_user . "<br>");
$user = $obj->mostrar($id_user);
//print_r($user);
require_once("../head/head.php");
?>

<form action="update.php" method="POST">
    <h2>Modificando registro</h2>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
        <div class="col-sm-10">
            <input type="text" readonly name="id" class="form-control-plaintext" value="<?= $user['id'] ?>">
        </div>
        <label for="staticEmail" class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-10">
            <input type="text" readonly name="username" class="form-control-plaintext" value="<?= $user['username'] ?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Nombre</label>
        <div class="col-sm-10">
            <input type="text" name="name" class="form-control" value="<?= $user['name'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Email</label>
        <div class="col-sm-10">
            <input type="text" name="email" class="form-control" value="<?= $user['email'] ?>">
        </div>
    </div>
    <div>
        <input type="submit" class="btn btn-success" value="Actualizar">
        <a href="show.php?id=<?= $user['id'] ?>" class="btn btn-danger">Cancelar</a>
    </div>
</form>




<?php
require_once("../head/footer.php");
?>