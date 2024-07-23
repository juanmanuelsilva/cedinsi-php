<?php

class usernameController
{
    private $model;
    public function __construct()
    {
        require_once("c://wamp64/www/cedinsi/proyecto/model/usernameModel.php");
        $this->model = new usernameModel();
    }
    public function guardar($username, $email, $name, $password)
    {
        $id = $this->model->insertar($username, $email, $name, $password);
        return ($id != false) ? header("Location:show.php?id=" . $id) : header("Location:create.php");
    }
    public function mostrar($id_user)
    {
        return ($this->model->show($id_user) != false) ? $this->model->show($id_user) : header("Location:/cedinsi/proyecto/login.php");
    }
    public function index()
    {
        return ($this->model->index()) ? $this->model->index() : false;
    }
    public function update($id, $username, $email, $name)
    {
        return ($this->model->update($id, $username, $email, $name) != false) ? header("Location:show.php?id=" . $id) : header("Location:/cedinsi/proyecto/login.php");
    }
    public function delete($id)
    {
        return ($this->model->delete($id)) ? header("Location:/cedinsi/proyecto/dashboard.php?del_msg='1'") : header("Location:/cedinsi/proyecto/dashboard.php?del_msg='0'");
    }

    public function cookieExists()
    {
        if (!empty($_COOKIE['user_login_name'])) {
            $valorCookie = $_COOKIE['user_login_name'];
            if (($this->model->validarCookie($valorCookie) == true)) {
                // Se crea la sesion de usuario
                $_SESSION['usuario'] = $valorCookie;
                // COOKIES
                $tiempoExp = time() + 60 * 60 * 24 * 30; //1 mes
                setcookie("user_login_name", $valorCookie, $tiempoExp);
                return (true);
            } else {
                return (false);
            }
        } else {
            return (false);
        }
    }
}