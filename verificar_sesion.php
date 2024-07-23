<?php

session_start();
if (isset($_SESSION['usuario'])) {
    echo 'Sesión activa: ' . $_SESSION['usuario'];
} else {
    echo 'No hay sesión activa';
}