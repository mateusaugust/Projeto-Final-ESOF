<HTML>
	<HEAD>
		<TITLE> Cadastrar Funcionario </TITLE>
		<link real="stylesheet" type="text/css" href="cadastro.css">
		<link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
    crossorigin="anonymous">

		<LINK rel="stylesheet" type="text/css" href="visao/estilo.css" />
		<META charset="UTF-8" />
	</HEAD>
	<BODY>
		
		<H3> Cadastrar Funcionário </H3>
		
		<FORM action="contato.php?fun=cadastrar" method="POST" 
		enctype="multipart/form-data">
		<div id="cadastrar">

			<div class = "camposInput">
				<LABEL for="nome"> Nome: </LABEL> 
				<INPUT type="text" id="nome" name="nome" /> <br />	
			

			
				<LABEL for="nome"> CPF: </LABEL> 
				<INPUT type="text" id="cpf" name="cpf" /> <br />
			

			
				<LABEL for="tel"> Telefone: </LABEL> 
				<INPUT type="text" id="tel" name="telefone" /> <br />
			

			
				<LABEL for="email"> Email: </LABEL> 
				<INPUT type="text" id="email" name="email" /> <br />
			

			
				<LABEL for="email"> Data Nascimento: </LABEL> 
				<INPUT type="date" id="data_nascimento" name="data_nascimento" /> <br />
			

			
				<label for="sexo">Sexo:</label>
				<select id="sexo" name="sexo">
  				<option value="Feminino">Feminino</option>
  				<option value="Masculino">Masculino</option>
  				<option value="Outro">Outro</option>
				</select><br />
			</div>
			
			<button type="submit" class="btn btn-secondary" name="enviar" value="enviar">Enviar</button> 
		</FORM>

	</BODY>
</HTML>

