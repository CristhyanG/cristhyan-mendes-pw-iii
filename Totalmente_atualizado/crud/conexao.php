<?php
$servidor = "localhost";
$banco = "projeto01";
$usuario = "root";
$senha = "";

try {

    $conn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
    //configura o atributo de erro do PDO para lançar exceções. se ocorrer um erro na conexão ou em qualquer operação do banco de dados, uma exceção será lançada, permitindo que você a capture e lide com ela no bloco catch.
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return "conexao feita";
}catch (PDOException $e){
    echo "Conexão falhou: " . $e->getMessage();
}
?>