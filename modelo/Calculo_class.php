<?php
	class Calculo{
	//classe entidade	
		
		private $id_demanda;
		private $salario;
		private $avos_decimo_terceiro;
    private $decimo_terceiro;
    private $avos_ferias;
    private $ferias_proporcional;
    private $ferias_vencidas;
    private $terco_ferias;
    private $dias_aviso_previo;
    private $aviso_previo;
    private $quantidades_horas_extras;
    private $valor_horas_extras;
    private $dsr_horas_extras;
    private $perc_insalubridade;
    private $valor_insalubridade;
    private $valor_periculosidade;
    private $salario_familia;
    private $inss_salario;
    private $inss_13;
    private $ir;

		public function __construct(){
		}

    public function setValorInsalubridade($valor_insalubridade){
      $this ->valor_insalubridade= $valor_insalubridade;
    }

    public function getValorInsalubridade(){
      return this ->valor_insalubridade;
    }
    

    public function setIdDemanda($id_demanda){
      $this ->id_demanda = $id_demanda;
    }

    public function getIdDemanda(){
      return this ->id_demanda;
    }

    public function setSalario($salario){
      $this -> salario = $salario;
    }

    public function getSalario(){
      return this -> salario;
    }

    public function setAvosDecimoTerceiro($avos_decimo_terceiro){
      $this -> avos_decimo_terceiro = $avos_decimo_terceiro;
    }

    public function getAvosDecimoTerceiro(){
      return this -> avos_decimo_terceiro;
    }

    public function setDecimoTerceiro($decimo_terceiro){
      $this -> decimo_terceiro = $decimo_terceiro;
    }

    public function getDecimoTerceiro(){
      return this -> decimo_terceiro;
    }

    public function setAvosFerias($avos_ferias){
      $this-> avos_ferias = $avos_ferias;
    }

    public function getAvosFerias(){
      return this -> avos_ferias;
    }

    public function setFeriasProporcional($ferias_proporcional){
      $this->ferias_proporcional = $ferias_proporcional;
    }
  
  public function getFeriasProporcional(){
      return this->ferias_proporcional;
  }
  
  public function setFeriasVencidas($ferias_vencidas){
      $this->ferias_vencidas = $ferias_vencidas;
  }
  
  public function getFeriasVencidas(){
      return this->ferias_vencidas;
  }
  
  public function setTercoFerias($terco_ferias){
      $this->terco_ferias = $terco_ferias;
  }
  
  public function getTercoFerias(){
      return this->terco_ferias;
  }
  
  public function setDiasAvisoPrevio($dias_aviso_previo){
      $this->dias_aviso_previo = $dias_aviso_previo;
  }
  
  public function getDiasAvisoPrevio(){
      return this->dias_aviso_previo;
  }
  
  public function setAvisoPrevio($aviso_previo){
      $this->aviso_previo = $aviso_previo;
  }
  
  public function getAvisoPrevio(){
      return this->aviso_previo;
  }
  
  public function setQuantidadesHorasExtras($quantidades_horas_extras){
      $this->quantidades_horas_extras = $quantidades_horas_extras;
  }
  
  public function getQuantidadesHorasExtras(){
      return this->quantidades_horas_extras;
  }
  
  public function setValorHorasExtras($valor_horas_extras){
      $this->valor_horas_extras = $valor_horas_extras;
  }
  
  public function getValorHorasExtras(){
      return this->valor_horas_extras;
  }
  
  public function setDsrHorasExtras($dsr_horas_extras){
      $this->dsr_horas_extras = $dsr_horas_extras;
  }
  
  public function getDsrHorasExtras(){
      return this->dsr_horas_extras;
  }
  
  public function setPercInsalubridade($perc_insalubridade){
      $this->perc_insalubridade = $perc_insalubridade;
  }
  
  public function getPercInsalubridade(){
      $this->perc_insalubridade;
  }
  
  public function setValorPericulosidade($valor_periculosidade){
      $this->valor_periculosidade = $valor_periculosidade;
  }
  
  public function getValorPericulosidade(){
      return this->valor_periculosidade;
  }
  
  public function setSalarioFamilia($salario_familia){
      $this->salario_familia = $salario_familia;
  }
  
  public function getSalarioFamilia(){
      return this->salario_familia;
  }
  
  public function setInssSalario($inss_salario){
      $this->inss_salario = $inss_salario;
  }
  
  public function getInssSalario(){
      return this->inss_salario;
  }
  
  public function setInss13($inss_13){
      $this->inss_13 = $inss_13;
  }
  
  public function getInss13(){
      return this->inss_13;
  }
  
  public function setIr($ir){
      $this->ir = $ir;
  }
  
  public function getIr(){
      return this->ir;
  }
  
	}
?>