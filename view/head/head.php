<!-- MENU -->

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php
        echo (empty($_GET['id']))
            ?  ((strpos($_SERVER['REQUEST_URI'], 'create')) ? "Agregando nuevo usuario" : "Inicio")
            : ((strpos($_SERVER['REQUEST_URI'], 'show')) ? "Detalles de registro " . $_GET['id'] : "Actualizar registro " . $_GET['id']); ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid  bg-dark p-2 mb-3">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/cedinsi/proyecto/index.php">Inicio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.php">Ver Usuarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/cedinsi/proyecto/view/username/create.php">Agregar Usuario</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/cedinsi/proyecto/logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container-fluid">