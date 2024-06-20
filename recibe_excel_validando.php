<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<?php
require('config.php');
$tipo       = $_FILES['dataCliente']['type'];
$tamanio    = $_FILES['dataCliente']['size'];
$archivotmp = $_FILES['dataCliente']['tmp_name'];
$lineas     = file($archivotmp);
$cant_duplicidad = 0;

$i = 0;

foreach ($lineas as $linea) {
    $cantidad_registros = count($lineas);
    $cantidad_regist_agregados =  ($cantidad_registros - 1);

    if ($i != 0) {

        $datos = explode(";", $linea);

        $inOut        = !empty($datos[0])   ? ($datos[0]) : '';
        $dia          = !empty($datos[1])   ? ($datos[1]) : '';
        $ubicacion    = !empty($datos[2])   ? ($datos[2]) : '';
        $rack         = !empty($datos[3])   ? ($datos[3]) : '';
        $equipo       = !empty($datos[4])   ? ($datos[4]) : '';
        $ocTicket     = !empty($datos[5])   ? ($datos[5]) : '';
        $serial       = !empty($datos[6])   ? ($datos[6]) : '';
        $entregado    = !empty($datos[7])   ? ($datos[7]) : '';
        $recibido     = !empty($datos[8])   ? ($datos[8]) : '';
        $observacion  = !empty($datos[9])   ? ($datos[9]) : '';
        $eSol         = !empty($datos[10])  ? ($datos[10]) : '';


        if (!empty($celular)) {
            $checkemail_duplicidad = ("SELECT id FROM inventario WHERE id = '$id'");
            $ca_dupli = mysqli_query($con, $checkemail_duplicidad);
            $cant_duplicidad = mysqli_num_rows($ca_dupli);
        }

        if ($cant_duplicidad == 0) {

            $insertarData = "INSERT INTO inventario (
                    `inOut`, 
                    dia, 
                    ubicacion, 
                    rack, 
                    equipo, 
                    ocTicket, 
                    `serial`, 
                    entregado, 
                    recibido, 
                    observacion, 
                    eSol
                ) VALUES (
                    '$inOut', 
                    '$dia', 
                    '$ubicacion', 
                    '$rack', 
                    '$equipo', 
                    '$ocTicket', 
                    '$serial', 
                    '$entregado', 
                    '$recibido', 
                    '$observacion', 
                    '$eSol'
                )";
            mysqli_query($con, $insertarData);
        }
    }
    
    $i++;
}


?>
'<script>
    Swal.fire({
        title: "Carga exitosa",
        text: "La carga de tus registros a sido exitosa",
        icon: "success"
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = 'planilla.php';
        };
    });
</script>'
