function Empresa(id,nome,cnpj, cpfFuncionario){
  this.id=id;
  this.nome=nome;
  this.cnpj=cnpj
  this.cpfFuncionario = cpfFuncionario;
}

function Cadastro(empresa,cnpj){
    this.empresa=empresa;
    this.cnpj=cnpj;
}

var dados =[
  new Empresa(1,"Empresa1", "CNPJ1","123456789-13"),
  new Empresa(2,"Empresa2", "CNPJ2","123456789-13"),
  new Empresa(3,"Empresa3", "CNPJ3","123456789-13"),
  new Empresa(4,"Empresa4", "CNPJ5","123456789-13"),
  new Empresa(5,"Empresa6", "CNPJ6","123456789-13"),
  new Empresa(6,"Empresa7", "CNPJ7","123456789-13"),
  new Empresa(7,"Empresa8", "CNPJ8","123456789-13")
]

var dadosEmpresa =[
  new Cadastro("Teste","123")
]


$(document).ready(function() {
  $("#voltar").click(function() {
    window.location.href = "../index.html";
  });
});

$(document).ready(function(){
  $('#login').click(function(){

  });
});

