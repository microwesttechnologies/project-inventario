<?php include 'bodega.php'; ?>
<?php include 'save.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Ingresar Registro</title>
    <!-- Importar Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   
</head>
<header>
                
</header>
          
<div class="container-fluid">
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
                                <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                            </a>
                            <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="planilla.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Planilla</span></a>
                                </li>
                                <li>
                                    <a href="rma.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Rma</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="contacto.php" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Contacto</span></a>
                        </li>
                    </ul>
                    <hr>
                    <br><br>
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-				toggle="dropdown" aria-expanded="false">
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

<body>

    <body class="d-flex flex-column h-100">
    <div class="container">
        <div class="card p-4">
            <h3 class="text-center mb-11">Creación de Registro</h3>
            <form action="save.php" method="POST">
                <div class="mb-3">
                    <label for="inOut" class="form-label">In/Out</label>
                    <input type="text" name="inOut" class="form-control" id="inOut" placeholder="InOut" autofocus
                        required>
                </div>
                <div class="mb-3">
                    <label for="dia" class="form-label fs1-">Día</label>
                    <input type="date" name="dia" class="form-control" id="dia" autofocus required>
                </div>
                <div class="mb-3">
                    <label for="ubicacion" class="form-label">Ubicación</label>
                    <input type="text" name="ubicacion" class="form-control" id="ubicacion" placeholder="Ubicación"
                        autofocus required>
                </div>
                <div class="mb-3">
                    <label for="rack" class="form-label">Rack</label>
                    <input type="text" name="rack" class="form-control" id="rack" placeholder="Rack" autofocus required>
                </div>

                <div class="mb-3">
                    <label for="rack" class="form-label">Equipo</label>
                    <input type="text" name="equipo" class="form-control" placeholder="Equipo" autofocus required>
                </div>

                <div class="mb-3">
                    <label for="ocTicket" class="form-label">Ticket Helix</label>
                    <input type="text" name="ocTicket" class="form-control" placeholder="Ticket Helix" autofocus required>
                </div>
                <div class="mb-3">
                    <label for="serial" class="form-label">Serial</label>
                    <input type="text" name="serial" class="form-control" placeholder="Serial" autofocus required>
                </div>

                <div class="mb-3">
                    <label for="entregado" class="form-label">Entregado por</label>
                    <input type="text" name="entregado" class="form-control" placeholder="Entregado por	" autofocus
                        required>
                </div>
                <div class="mb-3">
                    <label for="recibido" class="form-label">Recibido por</label>
                    <input type="text" name="recibido" class="form-control" placeholder="Recibido" autofocus required>
                </div>
                <div class="mb-3">
                    <label for="observacion" class="form-label">Observaciones</label>
                    <textarea name="observacion" rows="6" class="form-control" placeholder="Observaciones"></textarea>
                </div>
                <div class="mb-3">
                    <label for="observacion" class="form-label">Ingresado E-sol</label>
                    <ul class="list-group">
                        <li class="list-group-item">
                        <input type="radio" name="eSol" value="SI" id="eSol1">
                        <label for="eSol1">SI</label>
                        </li>
                        <li class="list-group-item">
                        <input type="radio" name="eSol" value="NO" id="eSol2">
                        <label for="eSol2">NO</label>
                        </li>
                    </ul>
                </div>
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button> -->
                <button type="submit" class="btn btn-primary" name="save_record" value="Save Task">Guardar registro</button>
            </form>
        </div>
    </div>

    
</body>
</html>

