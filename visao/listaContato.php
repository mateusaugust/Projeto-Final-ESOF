<HTML>
	<HEAD>
		<TITLE> Listagem de Contatos </TITLE>
		<META charset="UTF-8" />
		<link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
    crossorigin="anonymous">

		<LINK rel="stylesheet" type="text/css" href="visao/estilo.css" />
	</HEAD>
	<BODY>
		
	
		<TABLE border="1px" id="tabelaInicio">
			<TR> 
				<TH> ID </TH>
				<TH> Nome </TH>
				<TH> CPF </TH>
				<TH> Telefone </TH>	
				<TH> Email </TH>
				<TH> Data Nascimento </TH>
				<TH> Sexo </TH>		
				
				<TH> <img src="visao/img/update.png" width='30px' /> </TH>
				<TH> <img src="visao/img/delete.png" width='30px' /> </TH>
			</TR>
			<!-- Primeira linha da tabela com o cabeçalho -->
			
			<?php
				//assume que o controle passou uma lista
				foreach($lista as $c){	
					echo "<TR>"; 
					
					echo "<TD>" . $c->getId() . "</TD>";
					
					echo "<TD><A href=contato.php?fun=exibir&id=". $c->getId() . 
					      ">" . $c->getNome() . "</A></TD>";

					echo "<TD>" . $c->getCpf() . "</TD>";
					
					echo "<TD>" . $c->getTelefone() . "</TD>";
					
					echo "<TD>" . $c->getEmail() . "</TD>";
					 
					echo "<TD>" . $c->getDataNascimento() . "</TD>";	

					echo "<TD>" . $c->getSexo() . "</TD>";	
					
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

		<A href="contato.php?fun=cadastrar" > <button type="button" class="btn btn-secondary">Cadastrar</button> </A>
		</div>
		
	</BODY>
</HTML>