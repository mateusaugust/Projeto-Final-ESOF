<HTML>
	<HEAD>
		<TITLE> Calculo Recisorio </TITLE>
		<link real="stylesheet" type="text/css" href="cadastro.css">
		<link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
    crossorigin="anonymous">

		<LINK rel="stylesheet" type="text/css" href="visao/estilo.css" />
		<META charset="UTF-8" />
	</HEAD>
	<BODY>
		
		<H3> Cadastrar Demanda </H3>
		
		<FORM action="contato.php?fun=cadastrar" method="POST" 
		enctype="multipart/form-data" >
		
		<div id="gridStyle">
			<div class="container">
				<div class="row">
					
					<div class="col">
						<LABEL for="nome"> CNPJ: </LABEL> 	<br />
						<INPUT type="text" id="cnpj" name="cnpj" /> 
					</div>

					<div class="col">
						<LABEL for="nome"> Nome: </LABEL> <br />
						<INPUT type="text" id="nome" name="nome" /> 
					</div>

					<div class="col">
						<LABEL for="nome"> CPF: </LABEL> <br />
						<INPUT type="text" id="cpf" name="cpf" /> 
					</div>

					<div class="col">
						<LABEL for="tel"> Data de Admissão: </LABEL> <br />
						<INPUT type="date" id="data_admissao" name="data_admissao" /> 
					</div>

				

					<div class="w-100"></div>


					<div class="col">
						<LABEL for="email"> Jornada Mensal: </LABEL> <br />
						<INPUT type="number" id="jornada_mensal" name="jornada_mensal" /> 
					</div>

					<div class="col">
						<LABEL for="email"> Salario: </LABEL> <br />
						<INPUT type="number" id="salario" name="salario" /> 
					</div>

					<div class="col">
						<LABEL for="email">Dependentes: </LABEL> <br />
						<INPUT type="number" id="quant_dependente" name="quant_dependente" /> 
					</div>

					<div class="col">
						<LABEL for="email"> Ferias Vencidas: </LABEL> <br />
						<INPUT type="number" id="ferias_vencidas" name="ferias_vencidas" /> 
					</div>

					<div class="w-100"></div>

					<div class="col">
						<label for="ad_periculosidade">Adicional de Periculosidade:</label><br />
						<select id="ad_periculosidade" name="ad_periculosidade">
							<option value="0">0</option>
							<option value="30">30</option>
						</select>
					</div>

					<div class="col">
						<label for="adic_insalubridade">Adicional de Insalubridade:</label><br />
						<select id="adic_insalubridade" name="adic_insalubridade"> 
							<option value="0">0</option>
							<option value="10">10</option>
							<option value="20">20</option>
							<option value="40">40</option>
						</select>
					</div>

					<div class = "col">
						<label for="tipo_trct">Tipo TRCT:</label><br />
						<select id="tipo_trct" name="tipo_trct">
							<option value="">Dispensa sem justa causa</option>
							<option value="">Pedido de demissão</option>
						</select>
					</div>

					<div class = "col">
						<label for="tipo_aviso">Tipo de Aviso:</label><br />
						<select id="tipo_aviso" name="tipo_aviso">
							<option value="">Sem Aviso</option>
							<option value="">Aviso Previo</option>
						</select>
					</div>

					<div class="w-100"></div>

					<div class="col">
						<LABEL for="nome"> Data Demissao: </LABEL> 	<br />
						<INPUT type="date" id="data_demissao" name="data_demissao" /> 
					</div>

					<div class="col">
						<LABEL for="nome"> Horas Extras: </LABEL> 	<br />
						<INPUT type="text" id="quant_hora_extra" name="quant_hora_extra" /> 
					</div>

					<div class="col">
						<LABEL for="nome"> Saldo FGTS: </LABEL> 	<br />
						<INPUT type="text" id="SaldoFGTS" name="SaldoFGTS" /> 
					</div>

					<div class="col">
						<div id="cadastrar">
							<button type="submit" class="btn btn-secondary" name="enviar" value="enviar">Enviar</button> 
						</div>
					</div>
			</div>
		</div>
		
	</FORM>

	</BODY>
</HTML>

