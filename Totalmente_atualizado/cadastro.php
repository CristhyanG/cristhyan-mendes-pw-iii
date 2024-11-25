<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Projeto Painel de informações</title>
</head>
<body>
    
    <div class="container-img">
        <div class="form-img">
            <img src="img/undraw_forms_re_pkrt.svg" alt="">
        </div>
        <div class="form">
            
            <form action="crud/verificacaoCadastro.php" method="post">
                <div form="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
                    <div class="btn-login">
                        <button><a href="login.php">Entrar</a></button>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="novoNome" placeholder="Seu nome" required>
                    </div>

                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="novoEmail" placeholder="Digite seu email" required>
                    </div>

                    <div class="input-box">
                        <label for="senha">Senha</label>
                        <input type="password" id="senha" name="novoPass" placeholder="Digite sua senha" required>
                    </div>
                    
                    <div class="input-box">
                        <label for="number">Celular</label>
                        <input type="tel" id="celular" name="novoCelular" placeholder="(xx) xxxxx-xxxx" minlength ="14">
                    </div>

                    <div class="input-box">
                        <label for="senha">Confirme sua senha</label>
                        <input type="password" id="senha" name="confirmSenha" placeholder="Confirme sua Senha" required>
                    </div>
                </div>



                <div class="btn-generos">
                    <div class="grp-titulo">
                        <h5>Gênero</h5>
                    </div>
                    
                    <div class="grp-genero">
                        <input type="radio" id="feminino" value="feminino" name="novoGenero">
                        <label for="feminino">Feminino</label>
                    </div>

                    <div class="grp-genero">
                        <input type="radio" id="masculino" value="masculino" name="novoGenero">
                        <label for="masculino">Masculino</label>
                    </div>

                    <div class="grp-genero">
                        <input type="radio" id="outros" value="outros" name="novoGenero" >
                        <label for="outros">Outros</label>
                    </div>
                </div>

                <div class="btn-cadastro">
                    <button><a href="#">Cadastrar</a></button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>