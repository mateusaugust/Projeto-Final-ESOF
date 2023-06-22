<html>
  <head>
    <title>Lista de Contatos</title>
    <meta charset="utf-8"/>
  </head>

  <body>
    <?php
      $conexao = mysqli_connect("localhost", "root", "","agenda");

      $dados = mysqli_query($conexao,"SELECT * FROM contato");
    ?>
  <ul>
    <?php
      $i = 1;
      while($usuario = mysqli_fetch_array($dados)){
        echo("<li> Contato n°".$i.":".$usuario["nome"]."</li>");
        $i++;

      }
    ?>
  </ul>  
  </body>







</html>