<?php
	include_once("modelo/ContatoDAO_class.php");
	
	class AlterarContato{
		public function __construct(){		
			if(isset($_POST["enviar"])){
				//formulário enviar foi enviado
				
				$c = new Funcionario();
				$c->setId($_POST["id"]);
				$c->setNome($_POST["nome"]);
				$c->setCpf($_POST["cpf"]);
				$c->setTelefone($_POST["telefone"]);
				$c->setEmail($_POST["email"]);
				$c->setDataNascimento($_POST["data_nascimento"]);
				$c->setSexo($_POST["sexo"]);
			
				
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
