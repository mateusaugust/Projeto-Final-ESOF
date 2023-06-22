<?php
	include_once("modelo/ContatoDAO_class.php");	
	class CadastrarContato{
	
		public function __construct(){
			
			if(isset($_POST["enviar"])){
				//formulário enviar foi enviado
				
				$c = new Funcionario();
				$c->setNome($_POST["nome"]);
				$c->setCpf($_POST["cpf"]);
				$c->setTelefone($_POST["telefone"]);
				$c->setEmail($_POST["email"]);
				$c->setDataNascimento($_POST["data_nascimento"]);
				$c->setSexo($_POST["sexo"]);
				
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
