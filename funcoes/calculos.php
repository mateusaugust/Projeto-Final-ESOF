<?php

include_once("funcoesCalculos.php");


$con = mysqli_connect("localhost", "root", "", "trabalhoesof");

// Verificar se a conexão foi estabelecida corretamente
if (!$con) {
    die("Erro na conexão: " . mysqli_connect_error());
}

$sql = "SELECT * FROM caddemandas WHERE ID = 23";

$resultado = mysqli_query($con, $sql);

while ($row = mysqli_fetch_assoc($resultado)) {
    // Exiba os dados de cada coluna
    echo "ID: " . $row['ID'] . "<br>";
    
    // ... continue com as demais colunas

    echo "<br>";
}

// Fechar a conexão com o banco de dados
mysqli_close($con);
?>
