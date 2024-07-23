<?php
//session_start();
require_once "c://wamp64/www/cedinsi/proyecto/view/head/head.php";
require_once("c://wamp64/www/cedinsi/proyecto/controller/usernameController.php");
$obj = new usernameController();

$rows = $obj->index();
//print_r($rows);
?>

<div class="mb-3">
    <a href="/cedinsi/proyecto/view/username/create.php" class="btn btn-primary">Agregar nuevo usuario</a>
</div>

<div class="row py-3">
    <div class="col">
        <table class="table table-border">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($rows)) : foreach ($rows as $row) : ?>
                <tr>
                    <th> <?= $row['id'] ?> </th>
                    <th> <?= $row['username'] ?> </th>
                    <th>
                        <a href="/cedinsi/proyecto/view/username/show.php?id=<?= $row['id']  ?>"
                            class="btn btn-primary">Ver</a>
                        <a href="/cedinsi/proyecto/view/username/edit.php?id=<?= $row['id']  ?>"
                            class="btn btn-success">Modificar</a>
                        <a href="/cedinsi/proyecto/view/username/delete.php?id=<?= $row['id']  ?>"
                            class="btn btn-danger">Eliminar</a>
                    </th>
                </tr>
                <?php endforeach;
                else :  ?>
                <tr>
                    <td colspan="3" class="text-center">NO hay registros actualmente</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php
require_once "c://wamp64/www/cedinsi/proyecto/view/head/footer.php";
?>