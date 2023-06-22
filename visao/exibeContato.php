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
			<LI>Nome: <?php echo $cont->getNome(); ?></LI>
			<LI>CPF: <?php echo $cont->getCpf(); ?></LI>
			<LI>Telefone: <?php echo $cont->getTelefone(); ?></LI>
			<LI>E-mail: <?php echo $cont->getEmail(); ?></LI>
			<LI>Data Nascimento: <?php echo $cont->getDataNascimento(); ?></LI>
			<LI>Sexo <?php echo $cont->getSexo(); ?></LI>
		
		</UL>
		
		
		<A href="contato.php?fun=listar" > <button type="button" class="btn btn-secondary">Voltar</button> </A>
		
	</BODY>
	
</HTML>