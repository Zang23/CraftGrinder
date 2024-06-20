<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexão com o banco de dados
    $pdo = new PDO('mysql:host=localhost;dbname=dbcraftgrinder', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Obtém o ID do usuário da sessão (certifique-se de que esteja definido corretamente)
    $idUsuario = $_SESSION['idUsuario'];

    // Verifica se foi feito o upload do arquivo e se não houve erro
    if (isset($_FILES['arquivo']) && $_FILES['arquivo']['error'] === UPLOAD_ERR_OK) {
        // Verifica o tamanho do arquivo (máximo de 4KB)
        if ($_FILES['arquivo']['size'] > 4194304) {
            echo "Erro: O tamanho do arquivo deve ser no máximo 4MB.";
        } else {
            // Verifica o tipo de arquivo (apenas PNG)
            $tipoArquivo = $_FILES['arquivo']['type'];
            if ($tipoArquivo != 'image/png' && $tipoArquivo != 'image/jpg') {
                echo "Erro: Favor selecionar um formato válido";
            } else {
                // Define variáveis para o arquivo
                $skin = $_FILES['arquivo'];
                $nomeAleatorio = uniqid('arquivo_') . '_' . time() . '.png';
                $pastaUpload = "../img/skins/";
                $caminhoArquivo = $pastaUpload . $nomeAleatorio;

                // Move o arquivo para o diretório desejado
                if (move_uploaded_file($skin['tmp_name'], $caminhoArquivo)) {
                    // Verifica se já existe um arquivo para o usuário
                    $sql_check = "SELECT imgskin FROM tbclientes WHERE idCliente = :idUsuario";
                    $stmt_check = $pdo->prepare($sql_check);
                    $stmt_check->bindParam(':idUsuario', $idUsuario, PDO::PARAM_INT);
                    $stmt_check->execute();
                    $resultado = $stmt_check->fetch(PDO::FETCH_ASSOC);

                    if ($resultado && !empty($resultado['imgskin'])) {
                        // Remove o arquivo anterior
                        unlink($resultado['imgskin']);
                    }

                    // Atualiza o campo na tabela do banco de dados
                    $sql_code = "UPDATE tbclientes SET imgskin = :imgskin WHERE idCliente = :idUsuario";
                    $prepare = $pdo->prepare($sql_code);
                    $prepare->bindParam(':imgskin', $caminhoArquivo, PDO::PARAM_STR);
                    $prepare->bindParam(':idUsuario', $idUsuario, PDO::PARAM_INT);

                    $count = $prepare->execute();

                    // Verifica se a atualização foi bem-sucedida
                    if ($count > 0) {
                        // Redireciona para a página de sucesso
                        header('Location: http://localhost/craftgrinder/html/usuario/paginaUsuario.php');
                        exit;
                    } else {
                        echo "Erro ao atualizar o banco de dados.";
                    }
                } else {
                    echo "Erro ao mover o arquivo para o diretório de destino.";
                }
            }
        }
    } else {
        echo "Erro ao fazer o upload do arquivo.";
    }
}
?>


