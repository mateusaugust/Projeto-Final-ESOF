<?php

	include_once("modelo/CalculoDAO.php");
	
	class ExibirCalculo{
	
		public function __construct(){
			
			$dao = new CalculoDAO();
			$cont = $dao->exibirCalculo($_GET["id"]);
			include_once("visao/exibeCalc.php");	
			
		}
	}

?>