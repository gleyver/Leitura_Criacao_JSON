<?php

  // Fazendo conexão com o banco de dados
  $conn = mysqli_connect("localhost", "root", "", "hhealth");

  // Criando query
  $sql = "SELECT * FROM tbl_agendamento_consultas;";

  // Executando Query
  $executa_banco = mysqli_query($conn, $sql);

  // Criando uma variavel que será um array
  $lista = array();

  //Estrutura de repetição para salvar todos os dados da query no array que foi criado
  while ($row = mysqli_fetch_assoc($executa_banco)) {
    $lista[] = $row;
  }

  // Tranformando em json e exibindo na tela
  echo json_encode(array("pais"=>$lista));
  
?>
