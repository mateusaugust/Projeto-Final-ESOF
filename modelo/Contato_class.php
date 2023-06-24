<?php
	class Funcionario{
	//classe entidade	
		
		private $id;
		private $cnpj;
		private $nome;
		private $cpf;
		private $data_admissao;
		private $jornada_mensal;
		private $salario;
		private $quant_dependente;
		private $ferias_vencidas;
		private $ad_periculosidade;
		private $adic_insalubridade;
		private $tipo_trct;
		private $tipo_aviso;
		private $data_demissao;
		private $quant_hora_extra;
		private $saldo_fgts;

		
		public function __construct(){
		}
		
		public function setId($id){
			$this->id = $id;
		}
		
		public function getId(){
			return $this->id;
		}

		public function setCnpj($cnpj){
			$this->cnpj = $cnpj;
		}
		
		public function getCnpj(){
			return $this->cnpj;
		}

		public function setNome($nome){
			$this->nome = $nome;
		}
		
		public function getNome(){
			return $this->nome;
		}

		public function setCpf($cpf){
			$this->cpf = $cpf;
		}
		
		public function getCpf(){
			return $this->cpf;
		}
		
		public function setDataAdmissao($data_admissao){
			$this->data_admissao = $data_admissao;
		}
		
		public function getDataAdmissao(){
			return $this->data_admissao;
		}

		public function setJornadaMensal($jornada_mensal){
			$this->jornada_mensal = $jornada_mensal;
		}
		
		public function getJornadaMensal(){
			return $this->jornada_mensal;
		}

		public function setSalario($salario){
			$this->salario = $salario;
		}
		
		public function getSalario(){
			return $this->salario;
		}

		public function setQuantDependente($quant_dependente){
			$this->quant_dependente = $quant_dependente;
		}
		
		public function getQuantDependente(){
			return $this->quant_dependente;
		}

		public function setFeriasVencidas($ferias_vencidas){
			$this->ferias_vencidas = $ferias_vencidas;
		}
		
		public function getFeriasVencidas(){
			return $this->ferias_vencidas;
		}

		public function setAdPericulosidade($ad_periculosidade){
			$this->ad_periculosidade = $ad_periculosidade;
		}
		
		public function getAdPericulosidade(){
			return $this->ad_periculosidade;
		}

		public function setAdicInsalubridade($adic_insalubridade){
			$this->adic_insalubridade = $adic_insalubridade;
		}
		
		public function getAdicInsalubridade(){
			return $this->adic_insalubridade;
		}

		public function setTipoTrct($tipo_trct){
			$this->tipo_trct = $tipo_trct;
		}
		
		public function getTipoTrct(){
			return $this->tipo_trct;
		}

		public function setTipoAviso($tipo_aviso){
			$this->tipo_aviso = $tipo_aviso;
		}
		
		public function getTipoAviso(){
			return $this->tipo_aviso;
		}

		public function setDataDemissao($data_demissao){
			$this->data_demissao = $data_demissao;
		}
		
		public function getDataDemissao(){
			return $this->data_demissao;
		}

		public function setQuantHoraExtra($quant_hora_extra){
			$this->quant_hora_extra = $quant_hora_extra;
		}
		
		
		public function getQuantHoraExtra(){
			return $this->adic_insalubridade;
		}

				public function setSaldoFGTS($saldo_fgts){
			$this->saldo_fgts = $saldo_fgts;
		}
		
		
		public function getSaldoFGTS(){
			return $this->saldo_fgts;
		}
	}
?>