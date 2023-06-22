<HTML>
	<HEAD>
		<TITLE> Autorização de Exclusão </TITLE>
		<link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
    crossorigin="anonymous">
	</HEAD>
	<BODY>
		
		<H3> Confirmar exclusão de <?php echo $cont->getNome(); ?> </h3>
		<div>
		<A href="contato.php?fun=excluir&conf=sim&id=<?php echo $cont->getId();?>">  <button type="button" class="btn btn-success">Sim</button> 
		
		<A href="contato.php?fun=listar"> <button type="button" class="btn btn-danger">Não</button>

		</div>
	
	</BODY>
</HTML>