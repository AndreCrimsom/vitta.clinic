<?php
    include 'config.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Preparar a instrução SQL para inserção de dados
        $query = "INSERT INTO cliente (email, senha) VALUES (:email, :senha)";
        $stmt = $conn->prepare($query);
        
        // Bind dos parâmetros e execução da query
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha_hash); // Aqui você normalmente usaria password_hash() para criptografar a senha
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT); // Criptografar a senha
        
        $stmt->execute();
    }
?>