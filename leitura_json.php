<?php

//Pegando o arquivo Json
$json_file = file_get_contents("http://localhost/butecobraz/views/criacao_json.php");

//Lendo o arquivo Json se ele existir
$json_str = json_decode($json_file, true);

//Selecionando o array que vou puxar os dados
$itens = $json_str['pais'];

// Estrutura de repetição para pegar os itens dos campos
foreach ( $itens as $e )
    { 
    	echo $e['id_agendamento_consulta']."<br>";

    }

  ?>
