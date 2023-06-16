<?php
$cnpj =$_GET["cnpjEmpre"];
$nome = $_GET["nomeFunc"];
$cpf = $_GET["cpf"];
$data_adm = $_GET["dataAdmi"];
$jornada_mensal = $_GET["jornada"];
$salario = $_GET["salario"];
$dependente = $_GET["dependente"];
$ferias_vencidas = $_GET["feriasVencidas"];
$periculosidade = $_GET["periculosidade"];
$insalubridade = $_GET["insalubridade"];
$tipo_trct = $_GET["inputRecisao"];
$tipo_aviso = $_GET["inputAviso"];
$data_demissão = $_GET["inputDataDemi"];
$quant_hora_extra = $_GET["inputHoraExtra"];

$con = mysqli_connect("localhost", "root", "", "trabalhoesof");

$sql = "INSERT INTO caddemandas
	(CNPJ, NOME,CPF, DATA_ADMISSAO, JORNADA_MENSAL, SALARIO, QUANT_DEPENDENTE, FERIAS_VENCIDAS, AD_PERICULOSIDADE,
  ADIC_INSALUBRIDADE, TIPO_TRCT, TIPO_AVISO, DATA_DEMISSAO,QUANT_HORA_EXTRA)
	VALUES ('$cnpj','$nome', '$cpf', '$data_adm','$jornada_mensal','$salario', '$dependente', 
  '$ferias_vencidas', '$periculosidade', '$insalubridade', '$tipo_trct', '$tipo_aviso', '$data_demissão', '$quant_hora_extra' )";

$resultado = mysqli_query($con, $sql);


include_once("../telas/cadastroDemanda.html");

?>