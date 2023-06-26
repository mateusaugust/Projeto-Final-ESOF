<?php

	include_once("ConnectionFactory_class.php");//PDO
	include_once("Contato_class.php"); //entidade
  include_once("Calculo_class.php");
	
	class CalculoDAO{
	//DAO - Data Access Object	
	//CRUD - Creat, Read, Update e Delete
	//operações básicas de banco de dados
	
		public $con = null; //obj recebe conexão
		
		public function __construct(){
			$conF = new ConnectionFactory();
			$this->con = $conF->getConnection();
		}
		
		

		//exibir 
		public function exibirCalculo($id){			
			try{				
				$lista = $this->con->query("SELECT * FROM cadcalculos WHERE ID_DEMANDA = " . $id);
				
				/*$this->con->close();
				$this->con = null;*/
				
				$dado = $lista->fetchAll(PDO::FETCH_ASSOC);
				
        if ($dado) {
          $c = new Calculo();

          $c->setIdDemanda($dado[0]["ID_DEMANDA"]);
          $c->setSalario($dado[0]["SALARIO"]);
          $c->setAvosDecimoTerceiro($dado[0]["AVOS_DECIMO_TERCEIRO"]);
          $c->setDecimoTerceiro($dado[0]["DECIMO_TERCEIRO"]);
          $c->setAvosFerias($dado[0]["AVOS_FERIAS"]);
          $c->setFeriasProporcional($dado[0]["FERIAS_PROPORCIONAL"]);
          $c->setFeriasVencidas($dado[0]["FERIAS_VENCIDAS"]);
          $c->setTercoFerias($dado[0]["TERCO_FERIAS"]);
          $c->setDiasAvisoPrevio($dado[0]["DIAS_AVISO_PREVIO"]);
          $c->setAvisoPrevio($dado[0]["AVISO_PREVIO"]);
          $c->setQuantidadesHorasExtras($dado[0]["QUANTIDADES_HORAS_EXTRAS"]);
          $c->setValorHorasExtras($dado[0]["VALOR_HORAS_EXTRAS"]);
          $c->setDsrHorasExtras($dado[0]["DSR_HORAS_EXTRAS"]);
          $c->setPercInsalubridade($dado[0]["PERC_INSALUBRIDADE"]);
          $c->setValorInsalubridade($dado[0]["VALOR_INSALUBRIDADE"]);
          $c->setValorPericulosidade($dado[0]["VALOR_PERICULOSIDADE"]);
          $c->setSalarioFamilia($dado[0]["SALARIO_FAMILIA"]);
          $c->setInssSalario($dado[0]["INSS_SALARIO"]);
          $c->setInss13($dado[0]["INSS_13"]);
          $c->setIr($dado[0]["IR"]);

          return $c;
      }
			}
			catch(PDOException $ex){
				echo "Erro: " . $ex->getMessage();
			}
			
		}
	}


?>