
<?php 
include("conexao.php");
session_start();

// Capturando os valores do "post" e transformando em variáveis
// Adiciona filtro para email para que não tenha caracteres não validos
$loginEmail = filter_input(INPUT_POST, 'loginEmail', FILTER_SANITIZE_EMAIL);
$loginSenha = $_POST['loginSenha'];

// Preparando a consulta SQL usando prepared statements para evitar injeção de SQL
$stmt = $conn->prepare("SELECT * FROM login WHERE loginEmail = :loginEmail");
$stmt->bindParam(':loginEmail', $loginEmail, PDO::PARAM_STR);
$stmt->execute();

// Inicializa a variável de sessão de acesso
$_SESSION['acesso'] = false;

if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    //valida se a consulta do email retornou algo
    if (password_verify($loginSenha, $row['loginSenha'])) {
        // Valida se a senha inserida corresponde à senha armazenada no banco de dados com hash
        $_SESSION['acesso'] = true;
        header("Location: ../index.php");
        exit(); // Garante que o script pare de executar após o redirecionamento
    }
}

// Se a autenticação falhar
unset($_SESSION['acesso']);
session_destroy();
header("Location: ../login.php");
exit();
?>