<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/painel.css">
    <title>Projeto Painel de informações</title>
</head>
<?php
session_start();
//isset = validando se o arquivo existe
// empty = validando se o arquivo não estiver em branco
if(isset($_SESSION['acesso'])==true) {
 include("modelos/headerLog.php");
  
} else{
  include("modelos/header.php");
}

include("crud/conexao.php"); ?>

   <?php
       $stmt = $conn->prepare("select * from contato order by idContato desc");
       $stmt->execute(); 
   ?>
   
   <table class="table table-striped">
       <thead>
           <tr>
           <th scope="col">#</th>
               <th scope="col">Nome</th>
               <th scope="col">E-mail</th>
               <th scope="col">Celular</th>
               <th scope="col">Assunto</th>
               <th scope="col">Arquivo</th>
           </tr>
     </thead>
     <tbody>    
       <?php
           while($row = $stmt->fetch()) {
            echo "<tr>";
                echo "<td> $row[idContato] </td>";                             
                echo "<td> $row[contatoNome] </td>";
                echo "<td> $row[contatoEmail] </td>";
                echo "<td> $row[contatoNumero] </td>";
                echo "<td> $row[contatoAssunto] </td>";
                echo "<td> $row[contatoFile] </td>";  
                echo "<td>
                <form class='painel-form' method='post' action='crud/UD.php'>
                  <input type='hidden' name='id' value='$row[idContato]'/>
                      <button type='submit' name='action' value='edit' class='btn-UD'>
                      <img src='img/edit-button-svgrepo-com.svg'/>
                      </button>
                  </form>
                  </td> ";
                echo"<td>
                  <form class='painel-form' method='post' action='crud/UD.php' onsubmit='return confirmar()'>
                  <input type='hidden' name='id' value='$row[idContato]'/>
                  <button type='submit' name='action' value='del' class='btn-UD'>
                    <img src='img/lixeira-de-reciclagem.png'/>
                  </button>
                  </form> ";
                echo "</td>";
            echo "</tr>";
           }
       ?>
     </tbody>
   </table>
</body>