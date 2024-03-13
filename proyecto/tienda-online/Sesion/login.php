

<?php


include("../config/conexion.php");

session_start();

$U = $_POST['usuario'];
$CO = $_POST['Contra'];
$DIR = $_POST['Direccion'];


$Select = "SELECT * FROM `cli` WHERE `CLI_CORREO` = '$U' AND `CLI_CONTRA` = '$CO'";

if (mysqli_num_rows(mysqli_query($conexion, $Select))>0) {
   
    $AK = mysqli_fetch_assoc(mysqli_query($conexion, $Select));

   $_SESSION['Usuario'] = $AK['CLI_NOMBRE'];

   
   $_SESSION['Id'] = $AK['CLI_ID'];

   $_SESSION['Email'] = $AK['CLI_CORREO'];

  $_SESSION['Direc'] = $AK['CLI_DIRECCION'];


   echo "AJAJ";
}

if (mysqli_num_rows(mysqli_query($conexion, $Select)) == 0) {
   
    http_response_code(400);

   echo "xxx";
}

?>