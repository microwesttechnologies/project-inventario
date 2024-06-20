<?php

include('bodega.php');

if (isset($_POST['save_record'])) {
  $inOut = $_POST['inOut'];
  $dia = $_POST['dia'];
  $ubicacion = $_POST['ubicacion'];
  $rack = $_POST['rack'];
  $equipo = $_POST['equipo'];
  $ocTicket = $_POST['ocTicket'];
  $serial = $_POST['serial'];
  $entregado = $_POST['entregado'];
  $recibido = $_POST['recibido'];
  $observacion = $_POST['observacion'];
  $eSol = $_POST['eSol'];
 
  $query = "INSERT INTO `inventario`( `inOut`, `dia`, `ubicacion`,`rack`, `equipo`,`ocTicket`,`serial`,`entregado`,
  `recibido`,`observacion`,`eSol`) VALUES ('$inOut', '$dia','$ubicacion', '$rack', '$equipo','$ocTicket',
  '$serial','$entregado','$recibido','$observacion','$eSol')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: planilla.php');

}

?>