<?php
	include_once("modelo/ContatoDAO_class.php");
	
	class AlterarContato{
		public function __construct(){		
			if(isset($_POST["enviar"])){
				//formulário enviar foi enviado
				
				$c = new Funcionario();
	
				$c->setId($_POST["ID"]);
				$c->setCnpj($_POST["CNPJ"]);
				$c->setNome($_POST["NOME"]);
				$c->setCpf($_POST["CPF"]);
				$c->setDataAdmissao($_POST["DATA_ADMISSAO"]);
				$c->setJornadaMensal($_POST["JORNADA_MENSAL"]);
				$c->setSalario($_POST["SALARIO"]);
				$c->setQuantDependente($_POST["QUANT_DEPENDENTE"]);
				$c->setFeriasVencidas($_POST["FERIAS_VENCIDAS"]);
				$c->setAdPericulosidade($_POST["AD_PERICULOSIDADE"]);
				$c->setAdicInsalubridade($_POST["ADIC_INSALUBRIDADE"]);
				$c->setTipoTrct($_POST["TIPO_TRCT"]);
				$c->setTipoAviso($_POST["TIPO_AVISO"]);
				$c->setDataDemissao($_POST["DATA_DEMISSAO"]);
				$c->setQuantHoraExtra($_POST["QUANT_HORA_EXTRA"]);
				$c->setSaldoFGTS($_POST["SALDO_FGTS"]);
			
				
				$dao = new ContatoDAO();
				$dao->alterar($c);
				
				$status = "Alteração da ficha do funcionario " . $c->getNome() . " efetuada com sucesso";
				
				$lista = $dao->listar();
				
				include_once("visao/listaContato.php");
				
			} else{
			
				$dao = new ContatoDAO();
				$cont = $dao->exibir($_GET["id"]);
				include_once("visao/formAlteraContato.php");	
			
			}
		}
	}

?>
