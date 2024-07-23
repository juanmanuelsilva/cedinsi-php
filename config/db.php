<?php
class db
{
    private $host = "localhost";
    private $dbname = "proyecto";
    private $user = "root";
    private $password = "";
    private $charset = "utf8";
    private $opciones = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_CASE => PDO::CASE_LOWER,
        PDO::ATTR_ORACLE_NULLS => PDO::NULL_EMPTY_STRING,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    ];
    //private $pdo;

    public function conexion()
    {
        try {
            $conexion = "mysql:host=" . $this->host . ";dbname=" . $this->dbname . ";charset=" . $this->charset;
            $pdo = new PDO($conexion, $this->user, $this->password, $this->opciones);
            return $pdo;
        } catch (PDOException $e) {
            echo 'Error de conexion: ' . $e->getMessage();
            exit;
        }
    }
}