<?php
//adiciona meses em uma data
function adicionarMeses($data, $quantidadeMeses) {
    $dataObj = new DateTime($data);
    $dataObj->modify('+' . $quantidadeMeses . ' months');
    $dataFinal = $dataObj->format('Y-m-d');
    return $dataFinal;
}

//adiciona dias em uma data
function adicionarDias($data, $quantidadeDias) {
    $dataObj = new DateTime($data);
    $dataObj->modify('+' . $quantidadeDias . ' days');
    $dataFinal = $dataObj->format('Y-m-d');
    return $dataFinal;
}

//calcula o valor do 13º
function calculoValor13($bc,$qtAvos){
	$result = $bc / 12 * $qtAvos;
	
	return $result;
}


//retorna a data do ultimo dia do mês

function ultimoDiaMes1($data) {
  $data_obj = new DateTime($data);
  $data_obj->modify('last day of this month');
  $ultimo_dia = $data_obj->format('Y-m-d');
  return $ultimo_dia;
}

// extrai o ultimo dia do mês
function ultimoDiaMes($data) {
  $data_obj = new DateTime($data);
  $ultimo_dia = $data_obj->format('t');
  return $ultimo_dia;
}


//extrai dia,mes e ano de uma data
function extrairInformacao($data, $tipo) {
  $data_obj = new DateTime($data);

  switch ($tipo) {
    case 'd':
      $informacao = $data_obj->format('d');
      break;
    case 'm':
      $informacao = $data_obj->format('m');
      break;
    case 'a':
      $informacao = $data_obj->format('Y');
      break;
    default:
      $informacao = 'Formato inválido';
  }

  return $informacao;
}

//retorna quantos domingos existe no mês
function contarDomingos($dataInicio, $dataFim) {
  $inicio = new DateTime($dataInicio);
  $fim = new DateTime($dataFim);
  $intervalo = new DateInterval('P1D');
  $periodo = new DatePeriod($inicio, $intervalo, $fim);
  $contador = 0;

  foreach ($periodo as $data) {
    if ($data->format('D') === 'Sun') {
      $contador++;
    }
  }

  return $contador;
}

//monta data
function montarData($dia, $mes, $ano) {
    $data = sprintf('%04d-%02d-%02d', $ano, $mes, $dia);
	return $data;
}


//compara se uma data e maior que a outra e retorna true ou false
function compararDatas($data1, $data2) {
    $data1Obj = new DateTime($data1);
    $data2Obj = new DateTime($data2);

    return $data1Obj > $data2Obj;
}

//quantos dias tem entre datas
function diferencaDias($data1, $data2) {
    $dataInicio = new DateTime($data1);
    $dataFim = new DateTime($data2);
    $intervalo = $dataInicio->diff($dataFim);
    return $intervalo->days;
}

//salario mensal
function salarioMensal($dtInicio, $dtFim, $salario) {
    $salarioProporcional = 0;
    $ultimoDia = 0;
    $numDias = 0;
    
    if (extrairInformacao($dtInicio,'m')!=extrairInformacao($dtFim,'m')){
    $numDias = extrairInformacao($dtFim,'d');
    }else{
    $numDias = diferencaDias($dtInicio,$dtFim);
    }

    if (compararDatas($dtFim,$dtInicio)) {
        $ultimoDia = ultimoDiaMes($dtFim);
        $salarioProporcional = $salario / 30 * $numDias;
    }
   
    return $salarioProporcional;
}

//avos de 13º

function avos13($dtAdmissão,$dtDemissao){
	if (extrairInformacao($dtAdmissão,"a")!=extrairInformacao($dtDemissao,"a")){
		$dtInicio = montarData('01','01',extrairInformacao($dtDemissao,'a'));
	}else{
		$dtInicio = $dtAdmissão;
	}	
	
	$qtAvos = extrairInformacao($dtDemissao,"m")-extrairInformacao($dtInicio,"m")+1;
	$avosDeduzir = ultimoDiaMes($dtInicio)-extrairInformacao($dtInicio,"d");
	
	if ($avosDeduzir<15){
			$qtAvos = $qtAvos-1;
	}
	
//	echo diferencaDias(adicionarDias($dtDemissao,extrairInformacao($dtDemissao,'d')*(-1)),$dtDemissao);
	
	if(diferencaDias(adicionarDias($dtDemissao,extrairInformacao($dtDemissao,'d')*(-1)),$dtDemissao)<15){
		$qtAvos = $qtAvos-1;
	}
	
	return $qtAvos;
}

//avos de férias tem que ser revisada pois esta calculando errado
function avosFerias($dtAdmissao, $dtDemissao){
	
$dt1 = adicionarDias(montarData(extrairInformacao($dtAdmissao,'d'),extrairInformacao($dtAdmissao,"m"),extrairInformacao($dtDemissao,'a')),0);

	if (compararDatas($dtDemissao,$dt1)){
		$dtInicio = adicionarDias(montarData(extrairInformacao($dtAdmissao,'d'),extrairInformacao($dtAdmissao,"m"),extrairInformacao($dtDemissao,'a')),-1);	
	}else{		
		$dtInicio = adicionarDias(montarData(extrairInformacao($dtAdmissao,'d'),extrairInformacao($dtAdmissao,"m"),intval(extrairInformacao($dtDemissao,'a')-1)),-1);
	}	

	$contAvos=0;
	$aux=0;
	$ultimoAvo=0;
	$i = 1;

for ($i; $i < 13; $i++) {
	
    if(compararDatas($dtDemissao,adicionarMeses($dtInicio,$i))){

		//echo $dtDemissao . "<br>";
		//echo $dtDemissao . " e maior " . adicionarMeses($dtInicio,$i) . "<br>";

    	$contAvos = $contAvos+1;
    }else{
    	//echo "A data comparada por ultimo" . adicionarMeses($dtInicio,$i-1) . "<br>";
		
		$t = diferencaDias($dtDemissao,adicionarMeses($dtInicio,$i));
		if(($aux==0) && ($t>14)){
		$aux=1;
		$ultimoAvo=1;
	}   	
    }
}
//echo $contAvos+$ultimoAvo;
return $contAvos+$ultimoAvo;
}

//calculo de férias proporcionais
function calculoValorFeriasProporcionais($baseCalculo,$quantAvos){
	$valorFerias = $baseCalculo / 12 * $quantAvos;
	return $valorFerias;
}

//calcula quantidade de dias de aviso previo
function calcularDiasAviso($dataAdmissao, $dataDemissao) {
    $admissaoObj = new DateTime($dataAdmissao);
    $demissaoObj = new DateTime($dataDemissao);

    $diferenca = $demissaoObj->diff($admissaoObj);
    $anos = $diferenca->y;
	$diasAviso = 30+($anos*3);
	
	if($diasAviso>90){
		$diasAviso = 90;
	}

    return $diasAviso;
}

//calcula valor de aviso indenizado
function calculaValorAvisoPrevioIndenizado($baseCalculo,$diasAviso){
	$valorAviso = $baseCalculo / 30 * $diasAviso;
	return $valorAviso;
}

//calcula valor de horas extras
function caluloHorasExtras($baseCalc,$divisor,$quantHoras, $adicionalHE){
	$valorHorasExtras = ($baseCalc / $divisor) * $quantHoras * (1+($adicionalHE/100));
	
	return $valorHorasExtras;
}

//calcula o valor de DSR
function calculaValorDSR($valorHorasExtras,$dtInicio,$dtFim){
	$quantDomingos = contarDomingos($dtInicio,$dtFim);
	$diasUteis = extrairInformacao($dtFim,'d')- $quantDomingos;
	
	$valorDSR = $valorHorasExtras / $diasUteis * $quantDomingos;
	return $valorDSR;
}

//calculo de inss
function calculoINSS($baseCalculo){
	$valorINSS=0;
	$valorTotal=0;
	
	if($baseCalculo<=1320){
		$valorINSS = $baseCalculo * 0.075;
		$valorTotal = $valorTotal+$valorINSS;
	}else{
		$valorINSS = 1320 * 0.075;
		$valorTotal = $valorTotal+$valorINSS;
	}
	
	if($baseCalculo>1320 and $baseCalculo<=2571.29){
		$valorINSS = ($baseCalculo-1320) * 0.09;
		$valorTotal = $valorTotal+$valorINSS;
	}elseif($baseCalculo>2571.29){
		$valorINSS = 1251.28 * 0.09;
		$valorTotal = $valorTotal+$valorINSS;
	}
	
	if($baseCalculo>2571.29 and $baseCalculo<=3856.94){
		$valorINSS = ($baseCalculo-2571.28) * 0.12;
		$valorTotal = $valorTotal+$valorINSS;
	}elseif($baseCalculo>3856.94){
		$valorINSS = 1285.64 * 0.12;
		$valorTotal = $valorTotal+$valorINSS;
	}
	
	if($baseCalculo>3856.94 and $baseCalculo<=7507.49){
		$valorINSS = ($baseCalculo-3856.92) * 0.14;
		$valorTotal = $valorTotal+$valorINSS;
	}elseif($baseCalculo>7507.49){
		$valorINSS = 3650.54 * 0.14;
		$valorTotal = $valorTotal+$valorINSS;
	}
	
	return $valorTotal;
}

//calcula valor IR
function calculoIR($baseCalculo,$quantDependente,$outrasDeduções,$baseMesAnterior){
	$baseAtualizada = $baseCalculo - ($quantDependente * 189.59) - $outrasDeduções + $baseMesAnterior;
	$valorIR=0;	
	if($baseAtualizada>=2112.01 and $baseAtualizada<=2826.65){
		$valorIR = ($baseAtualizada * 0.075)-158.40;
	}elseif($baseAtualizada>=2826.66 and $baseAtualizada<=3751.05){
		$valorIR = ($baseAtualizada * 0.15)-370.40;
	}elseif($baseAtualizada>=3751.06 and $baseAtualizada<=4664.68){
		$valorIR = ($baseAtualizada * 0.225)-651.73;
	}elseif($baseAtualizada>=4664.69){
		$valorIR = ($baseAtualizada * 0.275)-884.96;
	}
	return $valorIR;
}

//valor salario familia
function valorSalarioFamilia($baseCalculo,$qtDependente){
$valorSalarioFamilia=0;

	if($baseCalculo<=1754.18){
		$valorSalarioFamilia = 59.82 * $qtDependente;
	}
	return $valorSalarioFamilia;
}

//calcula valor de insalubridade
function valorInsalubridade($baseCalc,$percentual){
	$valorInsalubridade = $baseCalc * ($percentual/100);
	return $valorInsalubridade;
}

//calcula valor periculosidade
function valorPericulosidade($baseCalc){
	$valorPericulosidade = $baseCalc *0.30;
	return $valorPericulosidade;
}

//calcula multa GRRF
function calculaMultaGRRF($baseTRCT,$saldoFGTS){
	$baseAtualizada = $saldoFGTS + ($baseTRCT * 0.08);
	$valorMulta = ($baseAtualizada * 0.40) + ($baseTRCT*0.08);
	return $valorMulta;
}

?>