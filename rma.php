<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RMA</title>
    <!-- Importar Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@ 5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/estilos.css"> -->
    <!-- links para exportar a excel -->
    <script src="https://unpkg.com/xlsx@0.16.9/dist/xlsx.full.min.js"></script>
    <script src="https://unpkg.com/file-saverjs@latest/FileSaver.min.js"></script>
    <script src="https://unpkg.com/tableexport@latest/dist/js/tableexport.min.js"></script>

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
         -->
</head>

</head>

<body>

    <body class="d-flex flex-column h-100">

        <style>
            th {
                background: #000000;
                color: #ffffff;
            }

            th,
            td {
                border: solid 1px #828282;
            }

            table {
                width: 400px;
            }

            .file-input__input {
                width: 0.1px;
                height: 0.1px;
                opacity: 0;
                overflow: hidden;
                position: absolute;
                z-index: -1;
            }
        </style>
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
                <main class="col col-sm-auto">
                    <br>
                    <h1 class="text-center">Movimientos Rma DC</h1>
                    <br>
                    <a href="create_rma.php" button type="button" class="btn btn-primary">Agregar</button></a>
                    <br>
                    <div class="mb-3 d-flex justify-content-end">
                        <button id="btnExportar" class="btn btn-success">
                            <i class="fas fa-file-excel"></i> Exportar Excel
                        </button>
                        <button id="btnImportar" class="btn btn-primary">Importar Excel</button>
                        <input type="file" id="file-input" style="display: none;" />
                    </div>




                    <table class="table table-bordered" id="tabla">
                        <thead class="table-primary">
                            <tr>
                                <th>Fecha</th>
                                <th>Tipo de Movimiento</th>
                                <th>Tipo Elemento</th>
                                <th>Modelo</th>
                                <th>Serial</th>
                                <th>Creado Por</th>
                                <th>Caso Cisco</th>
                                <th>RMA</th>
                                <th>Ticket Helix</th>
                                <th>Estado Equipo</th>
                                <th>Responsable</th>
                                <th>Observaciones</th>
                                <form action="rma.php" method="post">
                                    <input type="text" name="search" placeholder="Buscar...">
                                    <button type="submit" class="btn btn-outline-primary">Buscar</button>
                                </form>

                            </tr>

                        </thead>

                        <?php
                        // Conexión a la base de datos
                        $conn = mysqli_connect(
                            'localhost',
                            'root',
                            '',
                            'bodega'
                        );

                        // Verificar si se ha enviado una consulta de búsqueda
                        if (isset($_POST['search'])) {
                            $search = $_POST['search'];

                            // Consulta SQL para buscar registros que coincidan con la consulta
                            $query = "SELECT `id`, `fecha`, `tipodeMovimiento`, `tipoElemento`, `modelo`, `serial`, `creadoPor`, 
                            `casoCisco`, `RMA`, `tickectOcUsd`, `estadoEquipo`, `responsableMovimiento`, `observaciones` 
                            FROM `rma` WHERE `id` LIKE '%$search%' OR `fecha` LIKE '%$search%' OR `tipodeMovimiento` 
                            LIKE '%$search%' OR `tipoElemento` LIKE '%$search%' OR `modelo` LIKE '%$search%' OR `serial` 
                            LIKE '%$search%' OR `creadoPor` LIKE '%$search%' OR `casoCisco` LIKE '%$search%' OR `RMA` 
                            LIKE '%$search%' OR `tickectOcUsd` LIKE '%$search%' OR `estadoEquipo` LIKE '%$search%' 
                            OR `responsableMovimiento` LIKE '%$search%' OR `observaciones` LIKE '%$search%'";
                            $result_tasks = mysqli_query($conn, $query);
                        } else {
                            // Si no se ha enviado una consulta de búsqueda, mostrar todos los registros
                            $query = "SELECT `id`, `fecha`, `tipodeMovimiento`, `tipoElemento`, `modelo`, `serial`,
                            `creadoPor`, `casoCisco`, `RMA`, `tickectOcUsd`, `estadoEquipo`, `responsableMovimiento`,
                            `observaciones` FROM `rma`";
                            $result_tasks = mysqli_query($conn, $query);
                        }
                        ?>

                        <?php
                        $conn = mysqli_connect(
                            'localhost',
                            'root',
                            '',
                            'bodega'
                        );

                        $query = 'SELECT `id`,`fecha`, `tipodeMovimiento`, `tipoElemento`,`modelo`, `serial`, `creadoPor`,`casoCisco`,
                        `RMA`,`tickectOcUsd`,`estadoEquipo`,`responsableMovimiento`,`observaciones` FROM `rma`';
                        $result_tasks = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_assoc($result_tasks)) { ?>

                            <tr>
                                <!-- <td><?php echo $row['id']; ?></td> -->
                                <td><?php echo $row['fecha']; ?></td>
                                <td><?php echo $row['tipodeMovimiento']; ?></td>
                                <td><?php echo $row['tipoElemento']; ?></td>
                                <td><?php echo $row['modelo']; ?></td>
                                <td><?php echo $row['serial']; ?></td>
                                <td><?php echo $row['creadoPor']; ?></td>
                                <td><?php echo $row['casoCisco']; ?></td>
                                <td><?php echo $row['RMA']; ?></td>
                                <td><?php echo $row['tickectOcUsd']; ?></td>
                                <td><?php echo $row['estadoEquipo']; ?></td>
                                <td><?php echo $row['responsableMovimiento']; ?></td>
                                <td><?php echo $row['observaciones']; ?></td>
                            </tr>

                        <?php }
                        ?>
                        </tbody>
                    </table>
                    <ul class="pagination justify-content-end">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </main>

            </div>

            <!-- script para exportar a excel -->
            <script>
                const $btnExportar = document.querySelector("#btnExportar"),
                    $tabla = document.querySelector("#tabla");

                $btnExportar.addEventListener("click", function() {
                    let tableExport = new TableExport($tabla, {
                        exportButtons: false, // No queremos botones
                        filename: "Reporte RMA", //Nombre del archivo de Excel
                        sheetname: "Reporte RMA", //Título de la hoja
                    });
                    let datos = tableExport.getExportData();
                    let preferenciasDocumento = datos.tabla.xlsx;
                    tableExport.export2file(preferenciasDocumento.data, preferenciasDocumento.mimeType,
                        preferenciasDocumento.filename, preferenciasDocumento.fileExtension,
                        preferenciasDocumento.merges, preferenciasDocumento.RTL, preferenciasDocumento.sheetname
                    );
                });
            </script>

            <!-- script para manejar el evento de click del botón de importar -->
            <script>
                const $btnImportar = document.querySelector("#btnImportar"),
                    $fileInput = document.querySelector("#file-input");

                $btnImportar.addEventListener("click", function() {
                    $fileInput.click();
                });

                // Agrega un evento de cambio al input de tipo file para procesar el archivo
                $fileInput.addEventListener("change", function() {
                    const file = $fileInput.files[0];
                    const reader = new FileReader();
                    reader.onload = function(event) {
                        const data = event.target.result;
                        // Procesa el archivo aquí
                        // Por ejemplo, puedes utilizar la biblioteca XLSX para leer el archivo
                        const workbook = XLSX.read(data, {
                            type: "binary"
                        });
                        // ...
                    };
                    reader.readAsBinaryString(file);
                });
            </script>



    </body>

    <!-- <footer class="sticky-footer bg-white"> 
        <p class="copyright text-center my-auto">Inventario DC Telefonica - © ITS-Infocom</p>        
    </footer> -->

</html>