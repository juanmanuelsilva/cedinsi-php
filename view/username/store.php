<?php
require_once("c://wamp64/www/cedinsi/proyecto/controller/usernameController.php");
$obj = new usernameController();

//$datosFormulario = $_REQUEST;
//var_dump($datosFormulario);
//declaro las variables que vienen del formulario create.php
$username = $_POST["username"];
$email = $_POST["email"];
$name = $_POST["name"];
$password = $_POST["password"];

$obj->guardar($username, $email, $name, $password);