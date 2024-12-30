<?php 
include 'config.php';

//verifica se o forms foi enviado

if ($_SERVER ["REQUEST_METHOD"] == "POST"){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem= $_POST['mensagem'];

    //Preparar e executar a consulta
    $sql = "INSERT INTO usuarios (nome, email, telefone, mensagem) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $nome, $email, $telefone, $mensagem);

    if($stmt->execute()) {
        echo "Dados inseridos com sucesso!";
    }else {
        echo "Erro: " . $stmt->error;
    }
}
?>
