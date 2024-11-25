<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\index.css">
    <title>Wake Move</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<header> 
  <?php 
  session_start();
  if(isset($_SESSION['acesso'])==true) {
   include("modelos/headerLog.php");
    
  } else{
    include("modelos/header.php");
  }

  
  ?> 
</header>

<section>
<?php 
include("modelos/botao.php")
?>
</section>

<footer> 
  <?php include("modelos/footer.php") ?> 
</footer>

</body>
</html>