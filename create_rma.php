<?php include 'bodega.php'; ?>
<?php include 'save_rma.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creación de Registro</title>
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
                                <a href="planilla.php" class="nav-link px-0"> <span
                                        class="d-none d-sm-inline">Planilla</span></a>
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
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                        id="dropdownUser1" data-bs- toggle="dropdown" aria-expanded="false">
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
                    <form action="save_rma.php" method="POST">
                        <div class="mb-3">
                            <label for="inOut" class="form-label">TipodeMovimiento</label>
                            <input type="text" name="tipodeMovimiento" class="form-control" id="inOut"
                                placeholder="TipodeMovimiento" autofocus required>
                        </div>
                        <div class="mb-3">
                            <label for="fecha" class="form-label fs1-">Día</label>
                            <input type="date" name="fecha" class="form-control" id="fecha" autofocus required>
                        </div>
                        <div class="mb-3">
                            <label for="tipoElemento" class="form-label">Tipo de Elemento</label>
                            <input type="text" name="tipoElemento" class="form-control" id="ubicacion"
                                placeholder="TipoElemento" autofocus required>
                        </div>
                        <div class="mb-3">
                            <label for="modelo" class="form-label">Modelo</label>
                            <input type="text" name="modelo" class="form-control" id="rack" placeholder="Modelo"
                                autofocus required>
                        </div>

                        <div class="mb-3">
                            <label for="serial" class="form-label">Serial</label>
                            <input type="text" name="serial" class="form-control" placeholder="Serial" autofocus
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="creadoPor" class="form-label">Creado por</label>
                            <input type="text" name="creadoPor" class="form-control" placeholder="CreadoPor" autofocus
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="casoCisco" class="form-label">Caso Cisco</label>
                            <input type="text" name="casoCisco" class="form-control" placeholder="CasoCisco" autofocus
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="RMA" class="form-label">Numero RMA</label>
                            <input type="text" name="RMA" class="form-control" placeholder="RMA" autofocus required>
                        </div>
                        <div class="mb-3">
                            <label for="tickectOcUsd" class="form-label">Ticket Helix</label>
                            <input type="text" name="tickectOcUsd" class="form-control" placeholder="Ticket Helix"
                                autofocus required>
                        </div>
                        <div class="mb-3">
                            <label for="estadoEquipo" class="form-label">Estado Equipo</label>
                            <input type="text" name="estadoEquipo" class="form-control" placeholder="EstadoEquipo">
                        </div>
                        <div class="mb-3">
                            <label for="responsableMovimiento" class="form-label">Responsable Movimiento</label>
                            <input type="text" name="responsableMovimiento" class="form-control"
                                placeholder="ResponsableMovimiento" autofocus required>
                        </div>

                        <div class="mb-3">
                            <label for="observaciones" class="form-label">Observaciones</label>
                            <textarea type="text" name="observaciones" rows="6" class="form-control"
                                placeholder="Observaciones" autofocus required></textarea>
                        </div>

                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button> -->
                        <button type="submit" class="btn btn-primary" name="save_record" value="Save Task">Guardar
                            registro</button>
                    </form>
                </div>
            </div>



        </body>

</html>