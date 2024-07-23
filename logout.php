<?php
session_start();
unset($_SESSION['usuario']);
session_destroy();
setcookie('user_login_name', null, -1);
header('Location:index.php');
return (header('Location:/cedinsi/proyecto/index.php'));