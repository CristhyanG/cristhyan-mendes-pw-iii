<?php
    include('conexao.php');

    // Captura dos dados enviados pelo formulário
    $contatoNome = $_POST['contatoNome'];
    $contatoEmail = $_POST['contatoEmail'];
    $contatoCelular = $_POST['contatoCelular'];
    $contatoText = $_POST['contatoText'];
    $contatoFile = $_FILES['contatoFile'];

    // Verificando se o arquivo foi enviado e se não ocorreu nenhum erro no upload
    if (isset($contatoFile) && $contatoFile['error'] == 0) {

        // Definindo o tamanho máximo do arquivo (2MB)
        if ($contatoFile['size'] > 2097152) { // 2MB em bytes
            exit("[ERRO] Arquivo maior que 2 MB não é permitido.");
        }

        // Variável que vai levar os arquivos para a pasta
        $pasta = "../img/userFiles/";

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
                "INSERT INTO `contato`(`contatoNome`, `contatoEmail`, `contatoNumero`, `contatoAssunto`, `contatoFile`)
                 VALUES (:contatoNome, :contatoEmail, :contatoNumero, :contatoAssunto, :contatoFile)"
            );
            $stmt->bindParam(':contatoNome', $contatoNome);
            $stmt->bindParam(':contatoEmail', $contatoEmail);
            $stmt->bindParam(':contatoNumero', $contatoCelular);
            $stmt->bindParam(':contatoAssunto', $contatoText);
            $stmt->bindParam(':contatoFile', $contatoFilePath);

            $stmt->execute();

            // Redirecionamento após a inserção bem-sucedida
            header("Location: ../painel.php");
        } else {
            exit("[ERRO] Falha ao mover arquivo.");
        }
    } else {
        exit("[ERRO] Nenhum arquivo foi enviado ou ocorreu um erro no upload.");
    }
?>
