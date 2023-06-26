<HTML>

	<HEAD>
		<TITLE> Dados Calculo</TITLE>
		<link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
    crossorigin="anonymous">
	</HEAD>

	<BODY>
		
		<H3>  Dados Calculo (<?php echo $cont->getIdDemanda(); ?>) ?> </H3>
		<UL>
			<LI>ID DEMANDA: <?php echo $cont->getIdDemanda(); ?></LI>
			<LI>SALARIO: <?php echo $cont1->getSalario(); ?> </LI>
			<LI>AVOS DECIMO TERCEIRO: <?php echo $cont1->getAvosDecimoTerceiro(); ?> </LI>
			<LI>DECIMO TERCEIRO: <?php echo $cont1->getDecimoTerceiro(); ?></LI>
			<LI>AVOS FERIAS: <?php echo $cont1->getAvosFerias(); ?></LI>
			<LI>FERIAS PROPORCIONAL: <?php echo $cont1->getFeriasProporcional(); ?></LI>
			<LI>FERIAS VENCIDAS: <?php echo $cont1->getFeriasVencidas(); ?></LI>
			<LI>TERÇO FERIAS: <?php echo $cont1->getTercoFerias(); ?></LI>
			<LI>DIAS DE AVISO PREVIO: <?php echo $cont1->getDiasAvisoPrevio(); ?></LI>
			<LI>AVISO PREVIO: <?php echo $cont1->getAvisoPrevio(); ?></LI>
			<LI>QUANTIDADES DE HORAS EXTRAS: <?php echo $cont1->getQuantHoraExtra(); ?></LI>
			<LI>VALOR DE HORAS EXTRAS: <?php echo $cont1->getValorHorasExtras(); ?></LI>
			<LI>DSR HORAS EXTRAS: <?php echo $cont1->getDsrHorasExtras(); ?></LI>
			<LI>PERCENTUAL DE INSALUBRIDADE: <?php echo $cont1->getPercInsalubridade(); ?></LI>
			<LI>VALOR INSALUBRIDADE: <?php echo $cont1->getValorInsalubridade(); ?></LI>
      <LI>VALOR PERICULOSIDADE: <?php echo $cont1->valor_periculosidade(); ?></LI>
      <LI>SALARIO FAMILIA: <?php echo $cont1->getSalarioFamilia(); ?></LI>
      <LI>INSS SALARIO: <?php echo $cont1->getInssSalario(); ?></LI>
      <LI>INSS: <?php echo $cont1->getInss13(); ?></LI>
      <LI>IR: <?php echo $cont1->getIr1(); ?></LI>

		</UL>
		
		<div>
			<A href="contato.php?fun=listar" > <button type="button" class="btn btn-secondary">Voltar</button> </A>
		</div>
	</BODY>
	
</HTML>