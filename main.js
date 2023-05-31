function Empresa(id,nome,cnpj,senha,razao, endereco, cidade, estado, cep ){
  this.id=id;
  this.nome=nome;
  this.cnpj=cnpj
  this.senha=senha
  this.razao=razao;
  this.endereco=endereco;
  this.cidade=cidade;
  this.estado=estado;
  this.cep=cep;
}

let bdEmpresa = [
  new Empresa(1, "Teste1", "12345", "456","Teste", "Rua Tupis n 1102", "Guimarania", 
  "Minas Gerais(MG)", "38730-000" ),

  new Empresa(2, "Teste2", "1234","789","Teste", "Rua Tupis n 1102", "Guimarania", 
  "Minas Gerais(MG)", "38730-000" ),

  new Empresa(3, "Teste3", "123","321","Teste", "Rua Tupis n 1102", "Guimarania", 
  "Minas Gerais(MG)", "38730-000" )
];

$(document).ready(function() {//Volta para pagina principal;
  $("#voltar").click(function() {
    window.location.href = "../index.html";
  });

  $("#closeDemanda").click(function(){
    window.location.href = "../index.html";
  });
});

let = countId = 0;
$(document).ready(function(){//Cadastrar e Verificar se Ja tem cnpj cadastrado;
  const getFinalObject = bdEmpresa[bdEmpresa.length-1];
  countId = getFinalObject.id;

  $('#salvar').click(function(){
    const input = String($('#inputCnpj').val());
    var sinc = 0;

   $.each(bdEmpresa, function(indice,elemento) {
      if(elemento.cnpj === input){
        $('#alert').show();
        sinc = 1;
        return false
      }else{
        $('#alert').hide();
      }
    });
    
    if(sinc === 0){
      const insertBd = new Empresa(countId+1,String($('#inputName').val()),
      String($('#inputCnpj').val()), String($('#inputPassword').val()),String($('#inputRazao').val()),
      String($('#inputEnde').val()),String($('#inputCity').val()),String($('#inputEstado').val())
      ,String($('#inputCEP').val())
      );
      bdEmpresa.push(insertBd);
    } 
  });
});

var controler = 0;
var idLock = -1;

$(document).ready(function(){//Autentificação;
  $('#login').click(function(){
    $.each(bdEmpresa, function(index,empresa){
      if(String($('#cnpjLogin').val())===empresa.cnpj && 
         String($('#passwordLogin').val())===empresa.senha){
        
        $('#alert2').hide();
        idLock =Number(empresa.id);
        return false;
      }else{
       $('#alert2').show();
        idLock = Number(-1);
      }
    });

    if(idLock > -1){
      window.location.href="./telas/demandas.html";
    }
  });
});


