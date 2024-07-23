<?php
class usernameModel
{
    private $pdo;
    public function __construct()
    {
        require_once("c://wamp64/www/cedinsi/proyecto/config/db.php");
        $con = new db();
        $this->pdo = $con->conexion();
    }

    public function insertar($username, $email, $name, $password)
    {
        $stament = $this->pdo->prepare("INSERT INTO usuarios VALUES(null, :username, :email, :name, :password, null)");
        $stament->bindParam(":username", $username, PDO::PARAM_STR);
        $stament->bindParam(":email", $email, PDO::PARAM_STR);
        $stament->bindParam(":name", $name, PDO::PARAM_STR);
        $stament->bindParam(":password", $password, PDO::PARAM_STR);
        return ($stament->execute()) ? $this->pdo->lastInsertId()  :  false;
    }
    public function show($id_user)
    {
        $stament = $this->pdo->query("SELECT id, username, email, name FROM usuarios WHERE id = $id_user ");
        //$stament->bindParam(":id", $id_user, PDO::PARAM_STR);
        return ($stament->execute()) ? $stament->fetch() : false;
    }
    public function index()
    {
        $stament = $this->pdo->prepare("SELECT id, username, email, name FROM usuarios ORDER BY id LIMIT 10");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }
    public function update($id, $username, $email, $name)
    {
        $stament = $this->pdo->prepare("UPDATE usuarios SET username = :username, email = :email, name = :name  WHERE id = :id");
        $stament->bindParam(":id", $id);
        $stament->bindParam(":username", $username);
        $stament->bindParam(":email", $email);
        $stament->bindParam(":name", $name);
        return ($stament->execute()) ? $id : false;
    }
    public function delete($id)
    {
        $stament = $this->pdo->prepare("DELETE FROM usuarios WHERE id = :id");
        $stament->bindParam(":id", $id);
        return ($stament->execute()) ? true : false;
    }
    public function validar($username)
    {
        $stament = $this->pdo->query("SELECT id, username, password FROM usuarios WHERE username = '$username' ");
        return ($stament->execute()) ? $stament->fetch() : false;
    }
    public function validarCookie($username)
    {
        $stament = $this->pdo->query("SELECT username FROM usuarios WHERE username = '$username' ");
        return ($stament->execute()) ? true : false;
    }
}
