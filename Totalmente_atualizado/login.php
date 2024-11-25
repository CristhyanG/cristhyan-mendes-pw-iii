<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Projeto Painel de informações</title>
    <link rel="stylesheet" href="css/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>  

    <div class="login">
        <form action="crud/verificacaoLogin.php" method="post">
            <div class="sair-login"><a href="index.php"><img src="img/button_close.png" alt="X" style="width:35px"></a></div>
                <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="E-mail" name="loginEmail" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Senha" name="loginSenha" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="lembrar-usuario">
                <label><input type="checkbox">Lembrar-me</label>
                <a href="#">Esqueceu a senha?</a> <!-- Colocar um link e criar pagina-->
            </div>
            <button type="submit" class="btn">Entrar</button>
            <div class="link-registro">
                <p>Ainda não tem uma Conta? <a href="cadastro.php">Cadastre-se</a></p>
            </div>
            
        </form>
    </div>
    
</body>
</html>