<?php

	include_once("ConnectionFactory_class.php");//PDO
	include_once("Contato_class.php"); //entidade
	
	class ContatoDAO{
	//DAO - Data Access Object	
	//CRUD - Creat, Read, Update e Delete
	//operações básicas de banco de dados
	
		public $con = null; //obj recebe conexão
		
		public function __construct(){
			$conF = new ConnectionFactory();
			$this->con = $conF->getConnection();
		}
	
		//cadastrar
		public function cadastrar($cont){
			try{
				$stmt = $this->con->prepare(
				"INSERT INTO caddemandas(, cpf,telefone, email,data_nascimento, sexo)
				VALUES (:,:cpf , :telefone, :email, :data_nascimento, :sexo)");

				
				
				//ligamos as âncoras aos valores de Contato
				$stmt->bindValue(":nome", $cont->getNome());
				$stmt->bindValue(":cpf", $cont->getCpf());
				$stmt->bindValue(":telefone", $cont->getTelefone());
				$stmt->bindValue(":email", $cont->getEmail());
				$stmt->bindValue(":data_nascimento", $cont->getDataNascimento());
				$stmt->bindValue(":sexo", $cont->getSexo());

				
				
				$stmt->execute(); //execução do SQL	
				
				/*$this->con->close();
				$this->con = null;*/	
			}
			catch(PDOException $ex){
				echo "Erro: " . $ex->getMessage();
			}
		}
		
		//alterar
		public function alterar($cont){
			try{
				$stmt = $this->con->prepare(
				"UPDATE caddemandas SET nome=:nome, cpf=:cpf,
				telefone=:telefone, email = :email,  data_nascimento=:data_nascimento,
				sexo=:sexo WHERE
				id=:id");
				
				//ligamos as âncoras aos valores de Contato
				$stmt->bindValue(":nome", $cont->getNome());
				$stmt->bindValue(":cpf", $cont->getCpf());
				$stmt->bindValue(":telefone", $cont->getTelefone());
				$stmt->bindValue(":email", $cont->getEmail());
				$stmt->bindValue(":data_nascimento", $cont->getDataNascimento());
				$stmt->bindValue(":sexo", $cont->getSexo());
				$stmt->bindValue(":id", $cont->getId());
				
				$this->con->beginTransaction();
				//Inicia a transação
				//consistência ao banco
				//sem erros
				$stmt->execute(); //execução do SQL	
				$this->con->commit(); 
				//rollback - voltar atrás
				//commit - confirmação de tudo ok
				
				/*$this->con->close();
				$this->con = null;*/	
			}
			catch(PDOException $ex){
				echo "Erro: " . $ex->getMessage();
			}
		}
		//excluir
		public function excluir($cont){
			try{
				$num = $this->con->exec("DELETE FROM caddemandas WHERE id = " . $cont->getId());
				//numero de linhas afetadas pelo comando
				
				if($num >= 1){
					return 1;
				} else {
					return 0;
				}
			}
			catch(PDOException $ex){
				echo "Erro: " . $ex->getMessage();
			}
		}
	
		//listar
		public function listar($query = null){
			//quando $consulta == null
			//listar todos os contatos do banco
			//consultar a tabela contato
			//para cada linha da tabela vou criar um obj contato
			//guardar o objeto em um array
			//essa função retorna uma lista
			//query em português é consulta
			
			try{
				if($query == null){
					$dados = $this->con->query("SELECT * FROM caddemandas");
				} else {
					$dados = $this->con->query($query);
				}
				
				/*$this->con->close();
				$this->con = null;*/
				
				$lista = array();
				
				foreach($dados as $linha){
					$c = new Funcionario();
					$c->setId($linha["id"]);
					$c->setNome($linha["nome"]);
					$c->setCpf($linha["cpf"]);
					$c->setTelefone($linha["telefone"]);
					$c->setEmail($linha["email"]);
					$c->setDataNascimento($linha["data_nascimento"]);
					$c->setSexo($linha["sexo"]);
					
					$lista[] = $c;
					//preenchendo um array com objetos Contato
				}
				
				return $lista;	
			}
			catch(PDOException $ex){
				echo "Erro: " . $ex->getMessage();
			}
			
		}
		
		//exibir 
		public function exibir($id){			
			try{				
				$lista = $this->con->query("SELECT * FROM caddemandas WHERE id = " . $id);
				
				/*$this->con->close();
				$this->con = null;*/
				
				$dado = $lista->fetchAll(PDO::FETCH_ASSOC);
				
				$c = new Funcionario();
				$c->setId($dado[0]["id"]);
				$c->setNome($dado[0]["nome"]);
				$c->setCpf($dado[0]["cpf"]);
				$c->setTelefone($dado[0]["telefone"]);
				$c->setEmail($dado[0]["email"]);
				$c->setDataNascimento($dado[0]["data_nascimento"]);
				$c->setSexo($dado[0]["sexo"]);
				
				return $c;	
			}
			catch(PDOException $ex){
				echo "Erro: " . $ex->getMessage();
			}
			
		}
	}


?>