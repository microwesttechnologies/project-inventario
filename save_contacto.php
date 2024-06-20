<?php

include('bodega.php');

if (isset($_POST['save_record'])) {
    $nombreApellido = $_POST['nombreApellido'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    $query = "INSERT INTO `contacto`( `nombreApellido`, `correo`, `telefono`,`mensaje`) 
    VALUES ('$nombreApellido', '$correo','$telefono','$mensaje')";
    $result = mysqli_query($conn, $query);
    if(!$result) {
      die("Query Failed.");
    }

    $_SESSION['message'] = 'Task Saved Successfully';
    $_SESSION['message_type'] = 'success';
    header('Location:contacto.php');
  
  }
  
  ?>
