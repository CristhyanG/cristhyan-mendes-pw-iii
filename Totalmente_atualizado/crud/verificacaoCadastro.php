<?php
include("conexao.php");

// Capturando os valores do "POST" e transformando em variáveis
$novNome = $_POST['novoNome'] ?? null; //"?? NULL" serve para caso esteja vazio ele preencha o post com vazio
$novEmail = $_POST['novoEmail'] ?? null;
$novPass = $_POST['novoPass'] ?? null;
$novCelular = $_POST['novoCelular'] ?? null;
$novGenero = $_POST['novoGenero'] ?? null;
$confirmPass = $_POST['confirmSenha'] ?? null;

// Verificação simples para checar se o campo senha e confirme senha, estão iguais
if ($confirmPass === $novPass) {

    // Preparando a consulta SQL usando prepared statements para evitar injeção de SQL
    $stmt = $conn->prepare(
        "INSERT INTO `login`(`loginNome`, `loginEmail`, `loginSenha`, `loginCelular`, `loginGenero`)
         VALUES (:loginNome, :loginEmail, :loginSenha, :loginCelular, :loginGenero)"
    );
    $hashedPassword = password_hash($novPass, PASSWORD_DEFAULT);
    // metodo Bind dos parâmetros para dicionar valor no banco
    $stmt->bindParam(':loginNome', $novNome);
    $stmt->bindParam(':loginEmail', $novEmail);
    $stmt->bindParam(':loginSenha', $hashedPassword);
    $stmt->bindParam(':loginCelular', $novCelular);
    $stmt->bindParam(':loginGenero', $novGenero);

    // Executando a inserção de dados
    if ($stmt->execute()) {
        // Redireciona para a página de login após o cadastro
        header("Location: ../login.php");
        exit(); // Importante para garantir que o script pare de executar após o redirecionamento
    } else {
        echo "Erro ao cadastrar o usuário: " . $stmt->errorInfo()[2];
    }
} else {
    echo "Senhas divergentes"; // Se não tiverem iguais, o sistema exibirá esta mensagem
}
?>