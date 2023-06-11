<?php

$nomeEmpresa = $_GET["nomeEmpresa"];
$senha = $_GET["senha"];
$razaoSocial = $_GET["razaoSocial"];
$cnpj = $_GET["cnpj"];
$endereco = $_GET["endereco"];
$cidade = $_GET["cidade"];
$estado = $_GET["estado"];
$cep = $_GET["cep"];

$con = mysqli_connect("localhost", "root", "", "trabalhoesof");

$sql = "INSERT INTO cadempresa
	(CNPJ,NOME_EMPRESA, SENHA, RAZAO_SOCIAL, ENDERECO, CIDADE, ESTADO, CEP)
	VALUES ('$cnpj','$nomeEmpresa', '$senha', '$razaoSocial', '$endereco','$cidade' ,'$estado', '$cep')";


$resultado = mysqli_query($con, $sql);


include_once("../telas/telaCadastro.html");



?>