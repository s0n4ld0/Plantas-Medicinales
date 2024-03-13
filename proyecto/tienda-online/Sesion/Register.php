<?php

include("../config/conexion.php");

$U = $_POST['usuario'];
$C = $_POST['Correo'];
$CO = $_POST['Contra'];
$DIR = $_POST['Direccion'];

$Select = "SELECT * FROM `cli` WHERE `CLI_CORREO` = '$C'";


if(empty($U) || empty($C) || empty($CO))
{
    $Response = array('error' => "Rellene todos los campos");
    http_response_code(400);
    header('Content-Type: application/json');
    echo json_encode($Response);
    exit();
}

if (mysqli_num_rows(mysqli_query($conexion, $Select))) {
    $Response = array('error' => "Hay otro usuario con este correo");
    http_response_code(400);
    header('Content-Type: application/json');
    echo json_encode($Response);
    exit();
}

$Insert = "INSERT INTO `cli` (`CLI_ID`,`CLI_NOMBRE`,`CLI_CORREO`,`CLI_CONTRA`,`CLI_DIRECCION`) VALUES (NULL,'$U','$C','$CO', '$DIR')";

if (mysqli_query($conexion, $Insert)) {
 
    http_response_code(200);
    header('Content-Type: application/json');
    echo json_encode(array('success' => 'Registro exitoso'));
} else {
   
    http_response_code(500);
    header('Content-Type: application/json');
    echo json_encode(array('error' => 'Error interno del servidor al realizar el registro'));
}

?>

