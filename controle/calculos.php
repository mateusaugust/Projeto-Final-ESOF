<?php


$id = $_GET["id"];

include_once("funcoes.php");

$con = mysqli_connect("localhost", "root", "", "trabalhoesof");

// Verificar se a conexão foi estabelecida corretamente
if (!$con) {
    die("Erro na conexão: " . mysqli_connect_error());
}

//$id = 21;

$sql = "SELECT * FROM caddemandas WHERE ID = " . $id;

$resultado = mysqli_query($con, $sql);

//retorna o resultado da primeira linha
//ou seja a linha com os dados que são precisos para fazer os calculos
$row = mysqli_fetch_assoc($resultado);


$diasTrabalhados = salarioMensal($row['DATA_ADMISSAO'],$row['DATA_DEMISSAO'],$row['SALARIO']);

//13º SALARIO
$avos13 = avos13($row['DATA_ADMISSAO'],$row['DATA_DEMISSAO']);
$valorDecimoTerceiro = calculoValor13($row['SALARIO'],$avos13);

//FERIAS
$avosFerias = avosFerias($row['DATA_ADMISSAO'],$row['DATA_DEMISSAO']);
$valorFeriasProporcionais = calculoValorFeriasProporcionais($row['SALARIO'],$avosFerias);

$quantFeriasVencidas = $row['FERIAS_VENCIDAS'];
$feriasVencidas = $row['SALARIO']*$quantFeriasVencidas;

$tercoFerias = ($feriasVencidas + $valorFeriasProporcionais) / 3;

//calculo de aviso previo normal
$diasAvisoPrevio = calcularDiasAviso($row['DATA_ADMISSAO'],$row['DATA_DEMISSAO']);

$valorAvisoPrevio = calculaValorAvisoPrevioIndenizado($row['SALARIO'],$diasAvisoPrevio);

//calculo avos de férias e 13º sobre aviso previo
$dtDemissaoProjetada = adicionarDias($row['DATA_DEMISSAO'],$diasAvisoPrevio);

$avos13Indenizado = avos13($row['DATA_ADMISSAO'],$dtDemissaoProjetada)-$avos13;

$avosFeriasIndenizado = avosFerias($row['DATA_ADMISSAO'],$dtDemissaoProjetada)-$avosFerias;

//calculos de horas extras
$horasExtras50 = caluloHorasExtras($row['SALARIO'],$row['JORNADA_MENSAL'],$row['QUANT_HORA_EXTRA'],50);
$dsrHorasExtras = calculaValorDSR($horasExtras50,montarData("01",extrairInformacao($row['DATA_DEMISSAO'],"m"),extrairInformacao($row['DATA_DEMISSAO'],"a")),$row['DATA_DEMISSAO']);

$insalubridade = valorInsalubridade(1320,$row['ADIC_INSALUBRIDADE']);

$adicPericulosidade = valorPericulosidade($row['SALARIO']);

$salarioFamilia = valorSalarioFamilia($row['SALARIO'],$row['QUANT_DEPENDENTE']);

if ($row['TIPO_TRCT'] == "Dispensa sem justa causa"){
    $multaRescisoria = calculaMultaGRRF($diasTrabalhados+$valorDecimoTerceiro+$valorAvisoPrevio+$valorDecimoTerceiro,0);    
}else{
    $multaRescisoria = 0;
}

//impostos sobre TRCT
$inssSalario = calculoINSS($diasTrabalhados);
$inss13 = calculoINSS($valorDecimoTerceiro);
$IR = calculoIR($diasTrabalhados+$valorDecimoTerceiro,$row['QUANT_DEPENDENTE'],0,0);

$quantHorasExtras =$row['QUANT_HORA_EXTRA'];


$sqlInseriDados = "INSERT INTO cadcalculos (ID_DEMANDA, SALARIO, AVOS_DECIMO_TERCEIRO, DECIMO_TERCEIRO, AVOS_FERIAS, FERIAS_PROPORCIONAL,
 FERIAS_VENCIDAS, TERCO_FERIAS, DIAS_AVISO_PREVIO, AVISO_PREVIO, QUANTIDADES_HORAS_EXTRAS, VALOR_HORAS_EXTRAS, DSR_HORAS_EXTRAS, 
 PERC_INSALUBRIDADE, VALOR_INSALUBRIDADE, VALOR_PERICULOSIDADE, SALARIO_FAMILIA, INSS_SALARIO, INSS_13, IR) 
 VALUES ('$id','$diasTrabalhados','$avos13','$valorDecimoTerceiro','$avosFerias','$valorFeriasProporcionais','$feriasVencidas',
 '$tercoFerias','$diasAvisoPrevio','$valorAvisoPrevio','$quantHorasExtras','$horasExtras50','$dsrHorasExtras','$adicPericulosidade',
 '$insalubridade','$adicPericulosidade','$salarioFamilia','$inssSalario','$inss13','$IR')"; 

$resultado1 = mysqli_query($con, $sqlInseriDados);


/*
while ($row = mysqli_fetch_assoc($resultado)) {
    // Exiba os dados de cada coluna
    echo "ID: " . $row['ID'] . "<br>";
    
    // ... continue com as demais colunas

    echo "<br>";
}
*/
// Fechar a conexão com o banco de dados
mysqli_close($con);

?>
