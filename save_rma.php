<?php

include('bodega.php');

if (isset($_POST['save_record'])) {
  $fecha = $_POST['fecha'];
  $tipodeMovimiento = $_POST['tipodeMovimiento'];
  $tipoElemento = $_POST['tipoElemento'];
  $modelo = $_POST['modelo'];
  $serial = $_POST['serial'];
  $creadoPor = $_POST['creadoPor'];
  $casoCisco = $_POST['casoCisco'];
  $RMA = $_POST['RMA'];
  $tickectOcUsd = $_POST['tickectOcUsd'];
  $estadoEquipo= $_POST['estadoEquipo'];
  $responsableMovimiento = $_POST['responsableMovimiento'];
  $observaciones = $_POST['observaciones'];
 
  $query = "INSERT INTO `rma`( `fecha`, `tipodeMovimiento`, `tipoElemento`,`modelo`, `serial`,`creadoPor`,`casoCisco`,`RMA`,
  `tickectOcUsd`,`estadoEquipo`,`responsableMovimiento`,`observaciones`) VALUES ('$fecha', '$tipodeMovimiento','$tipoElemento', '$modelo', '$serial','$creadoPor',
  '$casoCisco','$RMA','$tickectOcUsd','$estadoEquipo','$responsableMovimiento','$observaciones')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location:rma.php');

}

?>