<HTML>

	<HEAD>
		<TITLE> Demanda <?php echo $cont->getNome(); ?> </TITLE>
		<link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
    crossorigin="anonymous">
	</HEAD>

	<BODY>
		
	<style>
  .list-group-item {
    padding: 5px 10px; /* Ajusta o espaçamento interno dos itens da lista */
    margin-bottom: 5px; /* Ajusta o espaçamento externo entre os itens da lista */
  }
</style>



		<H3>Informações Demanda</H3>
		<ul class="list-group">
  <li class="list-group-item">Codigo: <?php echo $cont->getId(); ?></li>
  <li class="list-group-item">CNPJ: <?php echo $cont->getCnpj(); ?></li>
  <li class="list-group-item">CPF: <?php echo $cont->getCpf(); ?></li>
  <li class="list-group-item">Nome: <?php echo $cont->getNome(); ?></li>
  <li class="list-group-item">Data de admissão: <?php echo $cont->getDataAdmissao(); ?></li>
  <li class="list-group-item">Data de Demissão: <?php echo $cont->getDataDemissao(); ?></li>
  <li class="list-group-item">Tpo de aviso: <?php echo $cont->getTipoAviso(); ?></li>
  <li class="list-group-item">Jornada Mensal: <?php echo $cont->getJornadaMensal(); ?></li>
  <li class="list-group-item">Salario: <?php echo number_format(round($cont->getSalario(), 2), 2, ',', '.'); ?></li>
  <li class="list-group-item">nº dependentes: <?php echo $cont->getQuantDependente(); ?></li>
  <li class="list-group-item">nº férias vencidas: <?php echo $cont->getFeriasVencidas(); ?></li>
  <li class="list-group-item">Adicional de periculosidade: <?php echo $cont->getAdPericulosidade(); ?></li>
  <li class="list-group-item">Adicional de insalubridade: <?php echo $cont->getAdicInsalubridade(); ?></li>
  <li class="list-group-item">Tipo de rescisão: <?php echo $cont->getTipoTrct(); ?></li>
  <li class="list-group-item">nº de horas extras: <?php echo $cont->getQuantHoraExtra(); ?></li>
  <li class="list-group-item">Saldo de FGTS: R$<?php echo number_format(round($cont->getSaldoFGTS(), 2), 2, ',', '.'); ?></li>
</ul>

		
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