<HTML>

	<HEAD>
		<TITLE> Funcionario <?php echo $cont->getNome(); ?> </TITLE>
		<link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
    crossorigin="anonymous">
	</HEAD>

	<BODY>
		
		<H3> Funcionário <?php echo $cont->getNome(); ?> </H3>
		<UL>
			<LI>ID: <?php echo $cont->getId(); ?></LI>
			<LI>CNPJ: <?php echo $cont->getCnpj(); ?></LI>
			<LI>NOME: <?php echo $cont->getNome(); ?></LI>
			<LI>CPF: <?php echo $cont->getCpf(); ?></LI>
			<LI>DATA_ADMISSAO: <?php echo $cont->getDataAdmissao(); ?></LI>
			<LI>DATA_ADMISSAO: <?php echo $cont->getDataAdmissao(); ?></LI>
			<LI>JORNADA_MENSAL: <?php echo $cont->getJornadaMensal(); ?></LI>
			<LI>SALARIO: <?php echo $cont->getSalario(); ?></LI>
			<LI>QUANT_DEPENDENTE: <?php echo $cont->getQuantDependente(); ?></LI>
			<LI>FERIAS_VENCIDAS: <?php echo $cont->getFeriasVencidas(); ?></LI>
			<LI>AD_PERICULOSIDADE: <?php echo $cont->getAdPericulosidade(); ?></LI>
			<LI>ADIC_INSALUBRIDADE: <?php echo $cont->getAdicInsalubridade(); ?></LI>
			<LI>TIPO_TRCT: <?php echo $cont->getTipoTrct(); ?></LI>
			<LI>DATA_DEMISSAO: <?php echo $cont->getTipoAviso(); ?></LI>
			<LI>QUANT_HORA_EXTRA: <?php echo $cont->getDataDemissao(); ?></LI>
			<LI>SALDO_FGTS: <?php echo $cont->getSaldoFGTS(); ?></LI>

		</UL>
		
		
		<A href="contato.php?fun=listar" > <button type="button" class="btn btn-secondary">Voltar</button> </A>
		
	</BODY>
	
</HTML>