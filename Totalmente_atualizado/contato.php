<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Painel de informações</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/contato.css">

</head>
<header> 
  <?php session_start();
  if(isset($_SESSION['acesso'])==true) {
   include("modelos/headerLog.php");
    
  } else{
    include("modelos/header.php");
  }
  ?> 
  
</header>
<body>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container contact-form">
            
            <form method ="post" action ="crud/verificarContato.php" enctype="multipart/form-data">
                <h3>Contato</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="contatoNome" class="form-control" placeholder="Nome Completo*" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="contatoEmail" class="form-control" placeholder="Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="contatoCelular" class="form-control" placeholder="Número *" value="" />
                        </div>
                        <div class="input-group">
                            <input type="file" name="contatoFile" class="form-control" accept="image/*" style="margin-bottom:50px;">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary"  value="Enviar Mensagem" />
                        </div>

                        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="contatoText" class="form-control" placeholder="Sua Mensagem*" style="width: 100%; height: 200px;"></textarea>
                        </div>
                    </div>
                </div>
            </form>
</div>
</body>
<footer> 
  <?php include("modelos/footer.php") ?> 
</footer>
</html>