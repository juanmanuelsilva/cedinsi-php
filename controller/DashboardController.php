<?php
session_start();
class DashBoardController
{
    public function cargarView()
    {
        require_once __DIR__ . "/../view/username/dashboard.php";
    }
}