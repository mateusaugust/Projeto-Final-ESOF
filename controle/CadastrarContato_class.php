<?php
	include_once("modelo/ContatoDAO_class.php");	
	class CadastrarContato{
	
		public function __construct(){
			
			if(isset($_POST["enviar"])){
				//formulário enviar foi enviado
				
				$c = new Funcionario();
				$c->setCnpj($_POST["cnpj"]);
				$c->setNome($_POST["nome"]);
				$c->setCpf($_POST["cpf"]);
				$c->setDataAdmissao($_POST["data_admissao"]);
				$c->setJornadaMensal($_POST["jornada_mensal"]);
				$c->setSalario($_POST["salario"]);
				$c->setQuantDependente($_POST["quant_dependente"]);
				$c->setFeriasVencidas($_POST["ferias_vencidas"]);
				$c->setAdPericulosidade($_POST["ad_periculosidade"]);
				$c->setAdicInsalubridade($_POST["adic_insalubridade"]);
				$c->setTipoTrct($_POST["tipo_trct"]);
				$c->setTipoAviso($_POST["tipo_aviso"]);
				$c->setDataDemissao($_POST["data_demissao"]);
				$c->setQuantHoraExtra($_POST["quant_hora_extra"]);
				$c->setSaldoFGTS($_POST["SaldoFGTS"]);
				
				$dao = new ContatoDAO();
				$dao->cadastrar($c);
				
				$status = "Cadastro do Contato " . $c->getNome() . 
				" efetuado com sucesso";
				
				$lista = $dao->listar();
				
				include_once("visao/listaContato.php");
				
			} else{
			
				include_once("visao/formCadastroContato.php");	
			
			}
		}
	}
?>
