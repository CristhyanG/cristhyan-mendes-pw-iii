<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastar Produto</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../css/contato.css">

</head>
<header> 
  <?php 
  session_start();
  //isset = validando se o arquivo existe
  // empty = validando se o arquivo não estiver em branco
  if(isset($_SESSION['acesso'])==true) {
   include("modelos/headerLog.php");
    
}else{
    include("modelos/header.php");
}

include("crud/conexao.php");
include("crud/ud.php");
  

  $id= $_GET['idContato'];

  $sql="SELECT * from contato where idContato=$id";

  $stmt=$conn->prepare($sql);
  $stmt->execute();

  
  ?> 
  
</header>
<body>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<?php
$contatoNome;
$contatoEmail;
$contatoCelular;
$contatoText;
$contatoFileOld;
    while($row= $stmt->fetch()){
        $contatoNome=$row['contatoNome'];
        $contatoEmail=$row['contatoEmail'];
        $contatoCelular=$row['contatoNumero'];
        $contatoText=$row['contatoAssunto'];
        $contatoFileOld=$row['contatoFile'];
 
    }

?>
</br>
<div class="container contact-form">
            
            <form method ="post" action="editProcess.php?idContato=<?php echo $id ?>" enctype="multipart/form-data">
                <h3>Atualizar Contato</h3>
                </br>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="contatoNome" class="form-control" placeholder="Novo nome*" value="<?php echo $contatoNome ?>" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="contatoEmail" class="form-control" placeholder="novo Email *" value="<?php echo $contatoEmail ?>" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="contatoCelular" class="form-control" placeholder="Novo número *" value="<?php echo $contatoCelular ?>" />
                        </div>
                        <h4>sua imagem </h4>
                            </br>
                            <img src="<?php echo 'ProjetoExibicao/'.$contatoFileOld?> " height="200px" width="200px" class="sua_imagem"/>
                            
                        <?php /* ------------>Mostrar a antiga imagem aqui<------------------
                        
                        <div class="input-group">
                            <input type="file" name="contatoFile" class="form-control" style="margin-bottom: 40px;" value="<?php echo $contatoFileOld ?>">
                        </div> */?>
                        
                        <div class="input-group">
                            <input type="file" name="contatoFileNew" class="form-control" style="margin: 40px 0px 40px; ">
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary"  value="Atualizar" />
                        </div>

                        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="contatoText" class="form-control" placeholder="Sua Nova Mensagem*" style="width: 100%; height: 150px;" value="<?php echo $contatoText?>"></textarea>
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
