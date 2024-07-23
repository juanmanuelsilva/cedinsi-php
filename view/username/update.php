<?php
require_once("c://wamp64/www/cedinsi/proyecto/controller/usernameController.php");
$obj = new usernameController();

//$datosFormulario = $_REQUEST;
//var_dump($datosFormulario);
//declaro las variables que vienen del formulario create.php
$id = $_POST["id"];
$username = $_POST["username"];
$email = $_POST["email"];
$name = $_POST["name"];
$obj->update($id, $username, $email, $name);
