<HTML>

	<HEAD>
		<TITLE> Dados Calculo</TITLE>
		<link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
    crossorigin="anonymous">

		<LINK rel="stylesheet" type="text/css" href="estilo.css" />
	</HEAD>

	<BODY>
		
		<H3>  Dados Calculo (<?php echo $cont->getIdDemanda(); ?>)</H3>

		<div id="tableCalc">
			<table class="table">
  			<thead>
   			 	<tr>
      			<th scope="col">Descriminação</th>
      			<th scope="col">Referencia</th>
      			<th scope="col">Proventos</th>
						<th scope="col">Descontos</th>
   		 		</tr>
  			</thead>
				<tbody>
					<tr>
						<td>Salario</td>
						<td> - </td>
						<td>R$ <?php echo round($cont->getSalario(),2); ?></td>
						<td> - </td>
					</tr>

					<tr>
						<td>Decimo Terceiro</td>
						<td><?php echo round($cont->getAvosDecimoTerceiro(),2); ?></td>
						<td>R$ <?php echo round($cont->getDecimoTerceiro(),2); ?></td>
						<td> - </td>
					</tr>

					<tr>
						<td>Férias</td>
						<td> - </td>
						<td>R$ <?php echo round($cont->getFeriasVencidas(),2); ?></td>
						<td> - </td>
					</tr>

					<tr>
						<td>Férias Proporcionais</td>
						<td><?php echo round($cont->getAvosFerias(),2); ?></td>
						<td>R$  <?php echo round($cont->getFeriasProporcional(),2); ?></td>
						<td> - </td>
					</tr>

					<tr>
						<td>Terço de Férias</td>
						<td><?php echo round($cont->getAvosFerias(),2); ?></td>
						<td>R$ <?php echo round($cont->getTercoFerias(),2); ?></td>
						<td> - </td>
					</tr>

					<tr>
						<td>Dias de Aviso Previo</td>
						<td><?php echo round($cont->getDiasAvisoPrevio(),2); ?></td>
						<td>R$ <?php echo round($cont->getAvisoPrevio(),2); ?></td>
						<td> - </td>
					</tr>

					<tr>
						<td>Horas Extras 50%</td>
						<td><?php echo round($cont->getQuantidadesHorasExtras(),2); ?></td>
						<td>R$  <?php echo round($cont->getValorHorasExtras(),2); ?></td>
						<td> - </td>
					</tr>

					<tr>
						<td>DSR</td>
						<td> - </td>
						<td>R$ <?php echo round($cont->getDsrHorasExtras(),2); ?></td>
						<td> - </td>
					</tr>

					<tr>
						<td>Insalubridade</td>
						<td><?php echo round($cont->getPercInsalubridade(),2); ?></td>
						<td>R$ <?php echo round($cont->getValorInsalubridade(),2); ?></td>
						<td> - </td>
					</tr>

					<tr>
						<td>Periculosidade</td>
						<td> 30 </td>
						<td>R$ <?php echo round($cont->getValorPericulosidade(),2); ?></td>
						<td> - </td>
					</tr>

					<tr>
						<td>Salario Familia</td>
						<td> - </td>
						<td>R$ <?php echo round($cont->getSalarioFamilia(),2); ?></td>
						<td> - </td>
					</tr>

					<tr>
						<td>INSS Salario</td>
						<td> - </td>
						<td> - </td>
						<td>R$ <?php echo round($cont->getInssSalario(),2); ?></td>
					</tr>

					<tr>
						<td>INSS 13°</td>
						<td> - </td>
						<td> - </td>
						<td>R$ <?php echo round($cont->getInss13(),2); ?></td>
					</tr>

					<tr>
						<td>Imposto de Renda</td>
						<td> - </td>
						<td> - </td>
						<td>R$ <?php echo round($cont->getIr(),2); ?></td>
					</tr>

					<tr>
						<td>Total</td>
						<td> - </td>
						<td> 
						R$ <?php echo round($cont->getSalario() + $cont->getDecimoTerceiro() + $cont->getFeriasProporcional() + 
							$cont->getFeriasVencidas() + $cont->getTercoFerias() + $cont->getAvisoPrevio() + $cont->getValorHorasExtras() + 
							$cont->getDsrHorasExtras() + $cont->getValorInsalubridade() + $cont->getValorPericulosidade() + $cont->getSalarioFamilia(),2); ?>
						</td>
						<td> R$ <?php echo round($cont->getInssSalario() + $cont->getInss13() + $cont->getIr(),2)?> </td>
					</tr>

					<tr>
						<td>Valor Liquido</td>
						<td> - </td>
						<td>
							R$ <?php echo round(($cont->getSalario() + $cont->getDecimoTerceiro() + $cont->getFeriasProporcional() + 
							$cont->getFeriasVencidas() + $cont->getTercoFerias() + $cont->getAvisoPrevio() + $cont->getValorHorasExtras() + 
							$cont->getDsrHorasExtras() + $cont->getValorInsalubridade() + $cont->getValorPericulosidade() + $cont->getSalarioFamilia()) - 
							($cont->getInssSalario() + $cont->getInss13() + $cont->getIr()),2) ;?>
						</td>
						<td> - </td>
					</tr>
				</tbody>
			</table>
		</div>
		
		
		<div id="btnVoltar">
			<A href="contato.php?fun=listar" > <button type="button" class="btn btn-secondary">Voltar</button> </A>
		</div>
	</BODY>
	
</HTML>