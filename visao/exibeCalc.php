<HTML>

	<HEAD>
		<TITLE> Dados Calculo</TITLE>
		<link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
    crossorigin="anonymous">
	</HEAD>

	<BODY>
		
		<H3>  Dados Calculo (<?php echo $cont->getIdDemanda(); ?>)</H3>
		<UL>
			<LI>ID DEMANDA: <?php echo $cont->getIdDemanda(); ?></LI>
			<LI>SALARIO: <?php echo $cont->getSalario(); ?> </LI>
			<LI>AVOS DECIMO TERCEIRO: <?php echo $cont->getAvosDecimoTerceiro(); ?> </LI>
			<LI>DECIMO TERCEIRO: <?php echo $cont->getDecimoTerceiro(); ?></LI>
			<LI>AVOS FERIAS: <?php echo $cont->getAvosFerias(); ?></LI>
			<LI>FERIAS PROPORCIONAL: <?php echo $cont->getFeriasProporcional(); ?></LI>
			<LI>FERIAS VENCIDAS: <?php echo $cont->getFeriasVencidas(); ?></LI>
			<LI>TERÇO FERIAS: <?php echo $cont->getTercoFerias(); ?></LI>
			<LI>DIAS DE AVISO PREVIO: <?php echo $cont->getDiasAvisoPrevio(); ?></LI>
			<LI>AVISO PREVIO: <?php echo $cont->getAvisoPrevio(); ?></LI>
			<LI>QUANTIDADES DE HORAS EXTRAS: <?php echo $cont->getQuantidadesHorasExtras(); ?></LI>
			<LI>VALOR DE HORAS EXTRAS: <?php echo $cont->getValorHorasExtras(); ?></LI>
			<LI>DSR HORAS EXTRAS: <?php echo $cont->getDsrHorasExtras(); ?></LI>
			<LI>PERCENTUAL DE INSALUBRIDADE: <?php echo $cont->getPercInsalubridade(); ?></LI>
			<LI>VALOR INSALUBRIDADE: <?php echo $cont->getValorInsalubridade(); ?></LI>
      <LI>VALOR PERICULOSIDADE: <?php echo $cont->getValorPericulosidade(); ?></LI>
      <LI>SALARIO FAMILIA: <?php echo $cont->getSalarioFamilia(); ?></LI>
      <LI>INSS SALARIO: <?php echo $cont->getInssSalario(); ?></LI>
      <LI>INSS: <?php echo $cont->getInss13(); ?></LI>
      <LI>IR: <?php echo $cont->getIr(); ?></LI>

		</UL>
		
		<div>
			<A href="contato.php?fun=listar" > <button type="button" class="btn btn-secondary">Voltar</button> </A>
		</div>
	</BODY>
	
</HTML>