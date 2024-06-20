<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planilla Bodega</title>
    <!-- Importar Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@ 5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white in-vh-100">
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
                                    <li>
                                        <a href="contacto.php" class="nav-link px-0 align-middle">
                                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Contacto</span></a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                        <hr>
                        <br><br><br><br>
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
                    <h1 class="text-center">Planilla Bodega DC</h1>
                    <br>
                    <a href="create.php"><button type="button" class="btn btn-primary">Agregar</button></a>
                    <br>
                    <form action="recibe_excel_validando.php" method="POST" enctype="multipart/form-data">
                        <div class="file-input text-center">
                            <input type="file" name="dataCliente" id="file-input" class="file-input__input" />
                            <label class="file-input__label btn btn-primary" for="file-input">
                                <i class="zmdi zmdi-upload zmdi-hc-2x"></i>
                                <span>Elegir Archivo Excel</span>
                            </label>
                        </div>
                        <div class="text-center mt-3">
                            <button type="submit" name="subir" class="btn btn-success">
                                <i class="zmdi zmdi-upload zmdi-hc-2x"></i>
                                <span>Subir Archivo</span>
                            </button>
                        </div>
                    </form>
                    <form action="planilla.php" method="post">
                        <input type="text" name="search" placeholder="Buscar...">
                        <button type="submit" class="btn btn-outline-primary">Buscar</button>
                    </form>
                    <table class="table table-bordered" id="tabla" data-page-size="10">
                        <thead class="table-primary">
                            <tr>
                                <!-- <th>ID</th> -->
                                <th>IN-OUT</th>
                                <th>Dia</th>
                                <th>Ubicacion</th>
                                <th>Rack</th>
                                <th>Equipo</th>
                                <th>Ticket Helix</th>
                                <th>Serial</th>
                                <th>Entregado por</th>
                                <th>Recibido por</th>
                                <th>Observaciones</th>
                                <th>E-Sol</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $conn = mysqli_connect(
                                'localhost',
                                'root',
                                '',
                                'bodega'
                            );

                            $query = 'SELECT `id`,`inOut`,`dia`, `ubicacion`, `rack`,`equipo`, `ocTicket`, `serial`,`entregado`,
                            `recibido`,`observacion`,`eSol` FROM `inventario`';
                            $result_tasks = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_assoc($result_tasks)) { ?>

                                <tr>
                                    <!-- <td><?php echo $row['id']; ?></td> -->
                                    <td><?php echo $row['inOut']; ?></td>
                                    <td><?php echo $row['dia']; ?></td>
                                    <td><?php echo $row['ubicacion']; ?></td>
                                    <td><?php echo $row['rack']; ?></td>
                                    <td><?php echo $row['equipo']; ?></td>
                                    <td><?php echo $row['ocTicket']; ?></td>
                                    <td><?php echo $row['serial']; ?></td>
                                    <td><?php echo $row['entregado']; ?></td>
                                    <td><?php echo $row['recibido']; ?></td>
                                    <td><?php echo $row['observacion']; ?></td>
                                    <td><?php echo $row['eSol']; ?></td>
                                </tr>

                            <?php }
                            ?>
                        </tbody>
                    </table>
                    <ul class="pagination justify-content-end">
                        <li class="page-item"><a class="page-link" href="#" id="prev-page">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#" id="current-page">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#" id="current-page">2</a></li>
                        <li class="page-item active"><a class="page-link" href="#" id="current-page">3</a></li>
                        <li class="page-item"><a class="page-link" href="#" id="next-page">Next</a></li>
                    </ul>
                </main>
            </div>
        </div>

        <!-- Script para la paginacion -->
        <script>
            let currentPage = 1;
            let pageSize = 10;
            let totalItems = 0;
            let itemsPerPage = 0;

            // Carga la cantidad total de items
            $.ajax({
                type: "GET",
                url: "api/items",
                success: function(data) {
                    totalItems = data.length;
                    itemsPerPage = pageSize;
                    updatePagination();
                }
            });

            // Actualiza la paginación
            function updatePagination() {
                let start = (currentPage - 1) * itemsPerPage;
                let end = start + itemsPerPage;
                let items = data.slice(start, end);
                // Actualiza la tabla con los items correspondientes a la página actual
                $("#tabla").html("");
                $.each(items, function(index, item) {
                    // Agrega una fila a la tabla para cada item
                    $("#tabla").append("<tr><td>" + item.name + "</td></tr>");
                });
            }

            // Maneja el evento de clic en el botón de página anterior
            $("#prev-page").on("click", function() {
                if (currentPage > 1) {
                    currentPage--;
                    updatePagination();
                }
            });

            // Maneja el evento de clic en el botón de página siguiente
            $("#next-page").on("click", function() {
                if (currentPage < Math.ceil(totalItems / itemsPerPage)) {
                    currentPage++;
                    updatePagination();
                }
            });

            // Maneja el evento de clic en el botón de página actual
            $("#current-page").on("click", function() {
                // No hace nada, solo para evitar que se produzca un error
            });
        </script>


        <!-- script para exportar a excel -->
        <script>
            const $btnExportar = document.querySelector("#btnExportar"),
                $tabla = document.querySelector("#tabla");

            $btnExportar.addEventListener("click", function() {
                let tableExport = new TableExport($tabla, {
                    exportButtons: false, // No queremos botones
                    filename: "Reporte Planilla Bodega", //Nombre del archivo de Excel
                    sheetname: "Reporte Planilla Bodega", //Título de la hoja
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

            // Guarda la informacion en la BD
            $fileInput.addEventListener("change", function() {
                const file = $fileInput.files[0];
                const reader = new FileReader();
                reader.onload = function(event) {
                    const data = event.target.result;
                    const workbook = XLSX.read(data, {
                        type: "binary"
                    });
                    const sheetName = workbook.SheetNames[0]; // Asume que solo hay una hoja
                    const sheet = workbook.Sheets[sheetName];
                    const rows = XLSX.utils.sheet_to_json(sheet, {
                        header: 1
                    });
                    // Procesa los datos de las filas
                    rows.forEach((row) => {
                        // Aquí puedes procesar cada fila y guardar los datos en la base de datos
                        // Por ejemplo, utilizando una consulta SQL
                        const query = `INSERT INTO inventario (columna1, columna2, ...) VALUES ('${row.valor1}', '${row.valor2}', ...);`;
                        // Ejecuta la consulta SQL para guardar los datos en la base de datos
                    });
                };
                reader.readAsBinaryString(file);
            });
        </script>


        <!-- <footer class="sticky-footer bg-white">
        <p class="copyright text-center my-auto">Inventario DC Telefonica - © ITS-Infocom</p>
    </footer> -->

    </body>

</html>