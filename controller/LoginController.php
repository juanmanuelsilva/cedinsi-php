<?php

class LoginController
{
    private $model;
    public function __construct()
    {
        require_once("c://wamp64/www/cedinsi/proyecto/model/usernameModel.php");
        $this->model = new usernameModel();
    }

    public function cargarView()
    {
        require_once "view/login/login.php";
    }

    public function validar($dataAcceso)
    {
        var_dump($dataAcceso);
        if (isset($dataAcceso['username']) && isset($dataAcceso['password'])) {
            $dataStored = $this->model->validar($dataAcceso['username']);
            if ($dataAcceso['username'] === $dataStored['username']) {
                if ($dataAcceso['password'] === $dataStored['password']) {
                    //$msg = "Usuario Autenticado Exitosamente";
                    // Se crea la sesion de usuario
                    $_SESSION['usuario'] = $dataStored['username'];
                    // COOKIES
                    $tiempoExp = time() + 60 * 60 * 24 * 30; //1 mes
                    setcookie("user_login_name", $dataStored['username'], $tiempoExp);
                    // redirección a página protegida
                    return (header("Location:dashboard.php"));
                } else {
                    $err = 3; //pass incorrecto
                    return (header("Location:login.php?validar_error=" . $err));
                }
            } else {
                $err = 2; // "Usuario no existe en la base de datos";
                return (header("Location:login.php?validar_error=" . $err));
            }
        } else {
            $err = 1; // "No se envió información";
            return (header("Location:login.php?validar_error=" . $err));
        }
        //return ($this->model->validar($username) != false) ? $this->model->validar($username) : header("Location:index.php");
    }
}