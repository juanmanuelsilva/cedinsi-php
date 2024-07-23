<?php
require_once("c://wamp64/www/cedinsi/proyecto/controller/usernameController.php");
$obj = new usernameController();

require_once("../head/head.php");
$id_user = $_GET['id'];
//print_r($id_user . "<br>");
$date = $obj->mostrar($id_user);
//print_r($date);
?>
<h2 class="text-center">Detalles del usuario</h2>
<div class="pb-3">
    <a href="edit.php?id=<?= $date['id'] ?>" class="btn btn-success">Actualizar</a>
    <!-- Button trigger modal -->
    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desea eliminar el registro de
                        <?= $date['username'] ?> ?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Una vez eliminado no se podrá recuperar el registro!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
                    <a href="delete.php?id=<?= $date['id'] ?>" class="btn btn-danger">Eliminar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row py-3">
    <div class="col">
        <table class="table table-border">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> <?php echo $date['username']; ?> </td>
                    <td> <?php echo $date['email']; ?> </td>
                    <td> <?php echo $date['name']; ?> </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php
require_once("../head/footer.php");
?>