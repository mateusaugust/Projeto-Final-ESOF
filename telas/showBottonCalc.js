$(document).ready(function() {
  var exibirBotao = localStorage.getItem("exibirBotao");
  if (exibirBotao === "true") {
    $("#calc").show();
  }
});