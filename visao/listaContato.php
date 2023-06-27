<HTML>
	<HEAD>
		<TITLE> Listagem de demanda </TITLE>
		<META charset="UTF-8" />
		<link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
    crossorigin="anonymous">

		<LINK rel="stylesheet" type="text/css" href="visao/estilo.css" />
	</HEAD>
	<BODY>
		
	
		<TABLE border="1px" id="tabelaInicio" class="">
			<TR> 
				<TH> ID </TH>
				<TH> CNPJ </TH>
				<TH> Nome </TH>
				<TH> CPF </TH>
				<TH> Data de admissão </TH>
				<TH> Jornada Mensal </TH>
				<TH> Salario </TH>
				<TH> nº depentende </TH>
				<TH> nº Férias vencidas </TH>
				<TH> Adic. Periculosidade </TH>
				<TH> Adic. Insalubridade </TH>
				<TH> Adic. Insalubridade </TH>
				<TH> Tipo de TRCT </TH>
				<TH> Tipo de Aviso </TH>
				<TH> Data de demissão </TH>
				<TH> Nº de horas extras </TH>
				<TH> Saldo de FGTS </TH>
				
				
				<TH> <img src="visao/img/update.png" width='30px' /> </TH>
				<TH> <img src="visao/img/delete.png" width='30px' /> </TH>
			</TR>
			<!-- Primeira linha da tabela com o cabeçalho -->
			
			<?php
				//assume que o controle passou uma lista
				foreach($lista as $c){	
					echo "<TR>"; 
					
					
					echo "<TD>" . $c->getId() . "</TD>";
					echo "<TD><A href=contato.php?fun=exibir&id=". $c->getId() . ">" . $c->getNome() . "</A></TD>";
					echo "<TD>" . $c->getCnpj() . "</TD>";
					echo "<TD>" . $c->getCpf() . "</TD>";
					echo "<TD>" . $c->getDataAdmissao() . "</TD>";
					echo "<TD>" . $c->getJornadaMensal() . "</TD>";	
					echo "<TD>" . $c->getSalario() . "</TD>";	
					echo "<TD>" . $c->getQuantDependente() . "</TD>";	
					echo "<TD>" . $c->getFeriasVencidas() . "</TD>";	
					echo "<TD>" . $c->getFeriasVencidas() . "</TD>";	
					echo "<TD>" . $c->getAdPericulosidade() . "</TD>";	
					echo "<TD>" . $c->getAdicInsalubridade() . "</TD>";	
					echo "<TD>" . $c->getTipoTrct() . "</TD>";	
					echo "<TD>" . $c->getTipoAviso() . "</TD>";	
					echo "<TD>" . $c->getDataDemissao() . "</TD>";	
					echo "<TD>" . $c->getQuantHoraExtra() . "</TD>";	
					echo "<TD>" . $c->getSaldoFGTS() . "</TD>";	
					
					
					echo "<TD><A href=contato.php?fun=alterar&id=" . 
					      $c->getId() . "><img src='visao/img/update.png' width='30px'/> 
						  </A></TD>"; 
					
					echo "<TD><A href=contato.php?fun=excluir&id=" . 
					      $c->getId() . "><img src='visao/img/delete.png' width='30px' /> 
						  </A></TD>";	
					
					echo "</TR>";	
				}	
			?>	
		</TABLE>

		<div id="save">

		<A href="contato.php?fun=cadastrar" > <button type="button" class="btn btn-secondary">Cadastrar Demanda</button> </A>
		</div>
		
	</BODY>
</HTML>