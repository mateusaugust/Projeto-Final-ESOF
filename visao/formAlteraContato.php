<HTML>
	<HEAD>
		<TITLE> Alterar Contato </TITLE>
		<link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
    crossorigin="anonymous">

		<LINK rel="stylesheet" type="text/css" href="visao/estilo.css" />
		<META charset="UTF-8" />
	</HEAD>
	<BODY>
		
		<H3> Alterar Contato </H3>
		
		<FORM action="contato.php?fun=alterar" method="POST">
			
		<div class = "camposInput">
			<INPUT type="hidden" name="id" 
			<?php echo "value='" . $cont->getId() . "'"; ?> />
			
			<LABEL for="nome"> Nome: </LABEL> 
			<INPUT type="text" id="nome" name="nome" 
			<?php echo "value='" . $cont->getNome() . "'"; ?> /> <br />

			<LABEL for="nome"> Cpf: </LABEL> 
			<INPUT type="text" id="cpf" name="cpf" 
			<?php echo "value='" . $cont->getCpf() . "'"; ?> /> <br />
			
			
			
			<LABEL for="tel"> Telefone: </LABEL> 
			<INPUT type="text" id="tel" name="telefone" 
			<?php echo "value='" . $cont->getTelefone() . "'"; ?>/> <br />

			<LABEL for="email"> Email: </LABEL> 
			<INPUT type="text" id="email" name="email" 
			<?php echo "value='" . $cont->getEmail() . "'"; ?>/> <br />
			
			<LABEL for="email"> Data Nascimento: </LABEL> 
			<INPUT type="text" id="data_nascimentp" name="data_nascimento" 
			<?php echo "value='" . $cont->getDataNascimento() . "'"; ?>/> <br />

			<label for="sexo">Sexo:</label>
			<select id="sexo" name="sexo">
  			<option value="Feminino" <?php if ($cont->getSexo() === 'Feminino') echo 'selected'; ?>>Feminino</option>
  			<option value="Masculino" <?php if ($cont->getSexo() === 'Masculino') echo 'selected'; ?>>Masculino</option>
  			<option value="Outro" <?php if ($cont->getSexo() === 'Outro') echo 'selected'; ?>>Outro</option>
			</select>
			<br />
			</div>
			
			
			<button type="submit" class="btn btn-secondary" name="enviar" value="enviar">Enviar</button>
			
			<!-- $_POST["enviar"]="enviar" -->
			
		</FORM>
		
	</BODY>

</HTML>