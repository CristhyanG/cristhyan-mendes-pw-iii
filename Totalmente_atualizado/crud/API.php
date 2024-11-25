<?php
    include('conexao.php');

    //Preparando a consulta sql
    $stmt = $conn->prepare("SELECT * FROM  contato");

    //Executando a consulta sql
    $stmt->execute();

    //Armazenando a consulta na array chamada "data"
    $data = array();

    //A lógica de repetição acontece adicionando os dados tudo na array="$data"
    while($row = $stmt->fetch()){
        $data[] = $row;
    }

    //Conversão da array em JSON
    echo json_encode($data);
?>