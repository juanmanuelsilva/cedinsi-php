<?php
require_once("c://wamp64/www/cedinsi/proyecto/controller/usernameController.php");

$id = $_GET["id"];
print_r($id);

$obj = new usernameController();

$obj->delete($id);