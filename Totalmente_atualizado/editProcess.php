<?php
include('crud/conexao.php');
$id = $_GET['idContato'];
$contatoNome = $_POST['contatoNome'];
$contatoEmail = $_POST['contatoEmail'];
$contatoCelular = $_POST['contatoCelular'];
$contatoText = $_POST['contatoText'];
$contatoFile = $_FILES['contatoFileNew'];

$sql = "select contatoFile from contato where idContato=$id";

$stmt = $conn->prepare($sql);
$stmt->execute();
$oldImage = $stmt->fetchColumn();


    
    // Definindo o tamanho máximo do arquivo (2MB)
    if ($contatoFile['size'] > 2097152) { // 2MB em bytes
        exit("[ERRO] Arquivo maior que 2 MB não é permitido.");
    }

    // Variável que vai levar os arquivos para a pasta
    $pasta = "img/userFiles/";

    // Verifica se a pasta existe, se não, cria
    if (!is_dir($pasta)) {
      echo " pasta não iniciada";
    }

    // Gerando um nome para salvar o arquivo
    $nomeArquivo = $contatoFile['name'];
    $extensao = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));
    $novoNomeArquivo = uniqid() . "." . $extensao;

    // Verificando a extensão do arquivo
    if ($extensao != "jpg" && $extensao != "png") {
        exit("[ERRO] Arquivo não atende as solicitações especificadas.");
    }

    // Caminho absoluto para a pasta de destino
    $caminhoCompleto = __DIR__ . '/' . $pasta . $novoNomeArquivo;

    // Movendo o arquivo para a pasta de destino
    if (move_uploaded_file($contatoFile["tmp_name"], $caminhoCompleto)) {
        $contatoFilePath = $pasta . $novoNomeArquivo;

        // Preparando a declaração SQL
        $stmt = $conn->prepare(
            "UPDATE contato
            SET contatoNome = :contatoNome,
                contatoEmail = :contatoEmail,
                contatoNumero = :contatoCelular,
                contatoFile = :contatoFile,
                contatoAssunto = :contatoAssunto
            WHERE idContato = :id"
            
        );

        $stmt->bindParam(':contatoNome', $contatoNome);
        $stmt->bindParam(':contatoEmail', $contatoEmail);
        $stmt->bindParam(':contatoCelular', $contatoCelular);
        $stmt->bindParam(':contatoFile', $contatoFilePath);
        $stmt->bindParam(':contatoAssunto', $contatoText);
        $stmt->bindParam(':id', $id);

       
    

        // Redirecionamento após a inserção bem-sucedida
        

        if($stmt->execute()){
            if($oldImage && file_exists(__DIR__.'/' . $oldImage)){
                unlink(__DIR__. '/' . $oldImage);
               
            } header("Location:painel.php");
            exit();
        } else{
            exit("[ERRO] problema na imagem");
        }
    } else {
        exit("[ERRO] Falha ao mover arquivo.");
    }

?>


