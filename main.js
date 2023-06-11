$(document).ready(function() {//Volta para pagina principal ou ir para outras;
  $("#voltar").click(function() {
    window.location.href = "../index.html";
  });

  $("#closeDemanda").click(function(){
   localStorage.removeItem("cnpj");
    window.location.href = "../index.html";
  });

  $("#voltarListaDemanda").click(function(){
    window.location.href = "../telas/demandas.html";
  });

  $("#addDemand").click(function(){
    window.location.href="../telas/cadastroDemanda.html";
    localStorage.setItem("exibirBotao", "false");
  });

  $("#btnedit").click(function(){
    window.location.href="./cadastroDemanda.html";
    localStorage.setItem("exibirBotao", "true");
  });

  $("#tableCalc").click(function(){
    window.location.href="./tabelaDeCalculos.html";

  });

});


$(document).ready(function() {
  const cnpj = localStorage.getItem("cnpj");
  var textoDinamico = "CNPJ empresa alocado: ";
  $('#conteudo').text(textoDinamico);
  $('#cnpjEmpre').val(cnpj);
});





   

