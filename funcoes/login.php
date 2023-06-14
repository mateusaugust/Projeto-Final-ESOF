<?php

$cnpj = $_GET["cnpj"];
$senha = $_GET["password"];

$con = mysqli_connect("localhost", "root", "", "trabalhoesof");

$sql = "SELECT * FROM cadempresa WHERE CNPJ = '$cnpj' AND SENHA = '$senha'";
$resultado = mysqli_query($con, $sql);

if (mysqli_num_rows($resultado) == 1) {
    echo '<script>';
    echo 'localStorage.setItem("cnpj", "' . $cnpj . '");';
    echo '</script>';

    include_once("../telas/demandas.html"); 
} else {
   
    header("Location: ../index.html");
    exit();

  
}

?>
