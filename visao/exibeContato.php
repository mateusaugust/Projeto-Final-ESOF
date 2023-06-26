<HTML>

	<HEAD>
		<TITLE> Funcionario <?php echo $cont->getNome(); ?> </TITLE>
		<link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
    crossorigin="anonymous">
	</HEAD>

	<BODY>
		
		<H3>Informações Demanda</H3>
		<UL>
			<LI>Codigo: <?php echo $cont->getId(); ?></LI>
			<LI>CNPJ: <?php echo $cont->getCnpj(); ?></LI>
			<LI>CPF: <?php echo $cont->getCpf(); ?> </LI>
			<LI>Nome: <?php echo $cont->getNome(); ?> </LI>
			<LI>Data de admissão: <?php echo $cont->getDataAdmissao(); ?></LI>
			<LI>Data de Demissão: <?php echo $cont->getDataDemissao(); ?></LI>
			<LI>Tpo de aviso: <?php echo $cont->getTipoAviso(); ?></LI>
			<LI>Jornada Mensal: <?php echo $cont->getJornadaMensal(); ?></LI>
			<LI>Salario: <?php echo $cont->getSalario(); ?></LI>
			<LI>nº dependentes: <?php echo $cont->getQuantDependente(); ?></LI>
			<LI>nº férias vencidas: <?php echo $cont->getFeriasVencidas(); ?></LI>
			<LI>Adicional de periculosidade: <?php echo $cont->getAdPericulosidade(); ?></LI>
			<LI>Adicional de insalubridade: <?php echo $cont->getAdicInsalubridade(); ?></LI>
			<LI>Tipo de rescisão: <?php echo $cont->getTipoTrct(); ?></LI>
			<LI>nº de horas extras: <?php echo $cont->getQuantHoraExtra(); ?></LI>
			<LI>Saldo de FGTS: <?php echo $cont->getSaldoFGTS(); ?></LI>
			
		</UL>
		
		<div>
			<A href="contato.php?fun=listar" > <button type="button" class="btn btn-secondary">Voltar</button> </A>

	
			<a href="contato.php?fun=exibirCalc&id=<?php echo $cont->getId(); ?>">
    		<button type="button" class="btn btn-info">Visualizar Cálculo</button>
    </a>
			
			<a href="contato.php?fun=calcular&id=<?php echo $cont->getId(); ?>">
    		<button type="button" class="btn btn-danger">Calcular</button>
			</a>
		</div>
	</BODY>
	
</HTML>