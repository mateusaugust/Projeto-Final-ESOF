<?php

$con = mysqli_connect("localhost", "root", "", "trabalhoesof");

$sql = $dadosParaCalculo = "select * from caddemandas";

$resultado = mysqli_query($con, $sql);

echo $resultado;




?>