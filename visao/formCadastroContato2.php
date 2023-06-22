<HTML>
	<HEAD>
		<TITLE> Cadastrar Contato </TITLE>
		<META charset="UTF-8" />
	</HEAD>
	<BODY>
		<H1> Cadastro Contato </H1>
		
		<FORM action="contato.php?fun=cadastrar" method="POST" 
		enctype="multipart/form-data">
			
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

			<LABEL for="email"> Sexo: </LABEL> 
			<INPUT type="text" id="sexo" name="sexo" /> <br />
			
			
			
			<INPUT type="submit" name="enviar" value="enviar" />
		</FORM>
	</BODY>
</HTML>

