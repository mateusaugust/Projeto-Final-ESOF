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
				"INSERT INTO caddemandas(CNPJ, NOME, CPF, DATA_ADMISSAO, JORNADA_MENSAL, SALARIO, QUANT_DEPENDENTE, FERIAS_VENCIDAS, AD_PERICULOSIDADE, ADIC_INSALUBRIDADE, TIPO_TRCT, TIPO_AVISO, DATA_DEMISSAO, QUANT_HORA_EXTRA, SALDO_FGTS)
				VALUES (:CNPJ,:NOME,:CPF,:DATA_ADMISSAO,:JORNADA_MENSAL,:SALARIO,:QUANT_DEPENDENTE,:FERIAS_VENCIDAS,:AD_PERICULOSIDADE,
				ADIC_INSALUBRIDADE,:TIPO_TRCT,:TIPO_AVISO,:DATA_DEMISSAO,:QUANT_HORA_EXTRA,:SALDO_FGTS)");

				
				
				//ligamos as âncoras aos valores de Contato
				$stmt->bindValue(":ID", $cont->getId());
				$stmt->bindValue(":CNPJ", $cont->getCnpj());
				$stmt->bindValue(":NOME", $cont->getNome());
				$stmt->bindValue(":CPF", $cont->getCpf());
				$stmt->bindValue(":DATA_ADMISSAO", $cont->getDataAdmissao());
				$stmt->bindValue(":JORNADA_MENSAL", $cont->getJornadaMensal());
				$stmt->bindValue(":SALARIO", $cont->getSalario());
				$stmt->bindValue(":QUANT_DEPENDENTE", $cont->getQuantDependente());
				$stmt->bindValue(":FERIAS_VENCIDAS", $cont->getFeriasVencidas());
				$stmt->bindValue(":AD_PERICULOSIDADE", $cont->getAdPericulosidade());
				$stmt->bindValue(":ADIC_INSALUBRIDADE", $cont->getAdicInsalubridade());
				$stmt->bindValue(":TIPO_TRCT", $cont->getTipoTrct());
				$stmt->bindValue(":TIPO_AVISO", $cont->getTipoAviso());
				$stmt->bindValue(":DATA_DEMISSAO", $cont->getDataDemissao());
				$stmt->bindValue(":QUANT_HORA_EXTRA", $cont->getQuantHoraExtra());
				$stmt->bindValue(":SALDO_FGTS", $cont->getSaldoFGTS());

				
				
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
				"UPDATE caddemandas 
				SET CNPJ=:CNPJ, NOME=:NOME, CPF=:CPF, DATA_ADMISSAO=:DATA_ADMISSAO, JORNADA_MENSAL=:JORNADA_MENSAL, SALARIO=:SALARIO, QUANT_DEPENDENTE=:QUANT_DEPENDENTE, FERIAS_VENCIDAS=:FERIAS_VENCIDAS, AD_PERICULOSIDADE=:AD_PERICULOSIDADE, ADIC_INSALUBRIDADE=:ADIC_INSALUBRIDADE, TIPO_TRCT=:TIPO_TRCT, TIPO_AVISO=:TIPO_AVISO, DATA_DEMISSAO=:DATA_DEMISSAO, QUANT_HORA_EXTRA=:QUANT_HORA_EXTRA, SALDO_FGTS=:SALDO_FGTS
				WHERE id=:id");
				

				//ligamos as âncoras aos valores de Contato
				$stmt->bindValue(":ID", $cont->getId());
				$stmt->bindValue(":CNPJ", $cont->getCnpj());
				$stmt->bindValue(":NOME", $cont->getNome());
				$stmt->bindValue(":CPF", $cont->getCpf());
				$stmt->bindValue(":DATA_ADMISSAO", $cont->getDataAdmissao());
				$stmt->bindValue(":JORNADA_MENSAL", $cont->getJornadaMensal());
				$stmt->bindValue(":SALARIO", $cont->getSalario());
				$stmt->bindValue(":QUANT_DEPENDENTE", $cont->getQuantDependente());
				$stmt->bindValue(":FERIAS_VENCIDAS", $cont->getFeriasVencidas());
				$stmt->bindValue(":AD_PERICULOSIDADE", $cont->getAdPericulosidade());
				$stmt->bindValue(":ADIC_INSALUBRIDADE", $cont->getAdicInsalubridade());
				$stmt->bindValue(":TIPO_TRCT", $cont->getTipoTrct());
				$stmt->bindValue(":TIPO_AVISO", $cont->getTipoAviso());
				$stmt->bindValue(":DATA_DEMISSAO", $cont->getDataDemissao());
				$stmt->bindValue(":QUANT_HORA_EXTRA", $cont->getQuantHoraExtra());
				$stmt->bindValue(":SALDO_FGTS", $cont->getSaldoFGTS());
				
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
					$c->setId($linha["ID"]);
					$c->setCnpj($linha["CNPJ"]);
					$c->setNome($linha["NOME"]);
					$c->setCpf($linha["CPF"]);
					$c->setDataAdmissao($linha["DATA_ADMISSAO"]);
					$c->setJornadaMensal($linha["JORNADA_MENSAL"]);
					$c->setSalario($linha["SALARIO"]);
					$c->setQuantDependente($linha["QUANT_DEPENDENTE"]);
					$c->setFeriasVencidas($linha["FERIAS_VENCIDAS"]);
					$c->setAdPericulosidade($linha["AD_PERICULOSIDADE"]);
					$c->setAdicInsalubridade($linha["ADIC_INSALUBRIDADE"]);
					$c->setTipoTrct($linha["TIPO_TRCT"]);
					$c->setTipoAviso($linha["TIPO_AVISO"]);
					$c->setDataDemissao($linha["DATA_DEMISSAO"]);
					$c->setQuantHoraExtra($linha["QUANT_HORA_EXTRA"]);
					$c->setSaldoFGTS($linha["SALDO_FGTS"]);
					
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
				
				$c->setId($dado["ID"]);
				$c->setCnpj($dado["CNPJ"]);
				$c->setNome($dado["NOME"]);
				$c->setCpf($dado["CPF"]);
				$c->setDataAdmissao($dado["DATA_ADMISSAO"]);
				$c->setJornadaMensal($dado["JORNADA_MENSAL"]);
				$c->setSalario($dado["SALARIO"]);
				$c->setQuantDependente($dado["QUANT_DEPENDENTE"]);
				$c->setFeriasVencidas($dado["FERIAS_VENCIDAS"]);
				$c->setAdPericulosidade($dado["AD_PERICULOSIDADE"]);
				$c->setAdicInsalubridade($dado["ADIC_INSALUBRIDADE"]);
				$c->setTipoTrct($dado["TIPO_TRCT"]);
				$c->setTipoAviso($dado["TIPO_AVISO"]);
				$c->setDataDemissao($dado["DATA_DEMISSAO"]);
				$c->setQuantHoraExtra($dado["QUANT_HORA_EXTRA"]);
				$c->setSaldoFGTS($dado["SALDO_FGTS"]);

				return $c;	
			}
			catch(PDOException $ex){
				echo "Erro: " . $ex->getMessage();
			}
			
		}
	}


?>