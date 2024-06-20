<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>    
     <!-- Importar Bootstrap CSS -->
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>  
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">  
    
</head>

<body>              
    <body class="d-flex flex-column h-100">    
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <br><br>
                <img src="img/logo_inv.jpg" width="150" height="90">
                <br><br>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link align-middle px-0">
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
            <main>
            <h1 class="row justify-content-center align-items-center">CONTACTANOS</h1>     
            <div class="container">
                <form action="save_contacto.php" method="POST">
                            <div id="login-row" class="row justify-content-center align-items-center">
                                <div id="login-column" class="col-md-6">
                                    <div id="login-box" class="col-md-12">    
                                        <br><br><br>
                                        <div class="form-group">
                                            <i class="far fa-trash-alt"></i> <input type="text" name="nombreApellido" id="nombreApellido"
                                                class="form-control" placeholder="Nombre y Apellido">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <input type="email" name="correo" id="correo" placeholder="Correo"
                                                class="form-control" required>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <input type="text" name="telefono" id="telefono" placeholder="Telefono"
                                                class="form-control" required>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <textarea name="mensaje" rows="10" class="form-control"
                                            placeholder="Mensaje"></textarea>
                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-primary" name="save_record"
                                            value="Save Task">Enviar</button>
                                    </div>
                                </div>
                            </div>
                </form>    
            </div>       
                
        </main>
    
    </div>
    
</body>

    <!-- <footer class="sticky-footer bg-white"> 
        <p class="copyright text-center my-auto">Inventario DC Telefonica - © ITS-Infocom</p>        
    </footer> -->
    
</html>