<?php
    // Conectamos a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bodega";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Comprobar la conexión
    if ($conn->connect_error) {
        die("Error al conectar: " . $conn->connect_error);
    }

    // Procesar los datos del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombreUsuario = $_POST["nombreUsuario"];
        $contraseña = $_POST["contraseña"];

        // Insertar los datos en la base de datos
        $sql = "INSERT INTO usuarios (nombreUsuario, contraseña) VALUES ('$nombreUsuario', '$contraseña')";
        $conn->query($sql);

        // Mostrar un mensaje de confirmación
        // echo "Registro guardado con éxito!";
    }

    // Cerrar la conexión
    $conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@ 5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
</head>

<body>
    <form action="index.php" method="POST" name="form_login"></form>

    <body class="d-flex flex-column h-100">
   <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <br><br>
                    <img src="img/logo_inv.jpg" width="150" height="90">
                    <br><br>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="login.php" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                            <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="planilla.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Planilla</span></a>
                                </li>
                                <li>
                                    <a href="rma.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Rma</span></a>
                                </li>
                                <li>
                                    <a href="contacto.php" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Contacto</span></a>
                                </li>
                                <li>
                                    <a href="uploadFile.php" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Subir plantilla</span></a>
                                </li>
                            </ul>
                        </li>
                                          
                                            
                    </ul>
                    <hr>
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="d-none d-sm-inline mx-1">Salir</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="login.php">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col py-3">

            <h1 class="text-center">Control de Inventario</h1>
            <br><br><br><br>
            <div class="container">
            <div class="row justify-content-center">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <!-- ... -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="img/invent.jpg" class="img-fluid rounded mx-auto d-block" style="width:30%">
                    </div>
                    <div class="carousel-item">
                    <img src="img/invent-2.jpg" class="img-fluid rounded mx-auto d-block" style="width:30%">
                    </div>
                    <div class="carousel-item">
                    <img src="img/invent-3.png" class="img-fluid rounded mx-auto d-block" style="width:30%">
                    </div>
                    <!-- ... otras imágenes ... -->
                </div>
                <!-- ... controles del carrusel ... -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
                
            </div>
            </div>

            <div class="text-center">
                <img src="img/logotelefonica.png" width="400" height="300">
            </div>

            </div>
            
        </div>
        </div>     
    </div>
    
    <!-- <footer class="sticky-footer bg-white"> 
        <p class="copyright text-center my-auto">Inventario DC Telefonica - © ITS-Infocom</p>        
    </footer> -->
</body>

    
</html>