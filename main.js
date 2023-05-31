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
  new Empresa(1, "Teste", "12345", "456","Teste", "Rua Tupis n 1102", "Guimarania", 
  "Minas Gerais(MG)", "38730-000" ),

  new Empresa(2, "Teste", "1234","789","Teste", "Rua Tupis n 1102", "Guimarania", 
  "Minas Gerais(MG)", "38730-000" ),

  new Empresa(3, "Teste", "123","321","Teste", "Rua Tupis n 1102", "Guimarania", 
  "Minas Gerais(MG)", "38730-000" )
];

$(document).ready(function() {//Volta para pagina principal;
  $("#voltar").click(function() {
    window.location.href = "../index.html";
  });
});


let = countId = 0;
$(document).ready(function(){//Cadastrar e Verificar se Ja tem cnpj cadastrado;
  const getFinalObject = bdEmpresa[bdEmpresa.length-1];
  countId = getFinalObject.id;

  $('#salvar').click(function(){
    const inputCnpj = String($('#inputCnpj').val());
    var sinc = 0;

   $.map(bdEmpresa, function(elemento, indice) {
      if(elemento.cnpj === inputCnpj){
        $('#alert').show();
        sinc = 1;
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


$(document).ready(function(){//Botão Login e Autentificação;


});


