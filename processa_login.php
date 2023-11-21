<?php
    include 'config.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
    
        // Consulta SQL para verificar o usuário no banco de dados
        $query = "SELECT * FROM cliente WHERE email = :email";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
    
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if ($user) {
            // Verificar se a senha corresponde
            if ($senha == $user['senha']) { // Aqui, normalmente você usaria password_hash() e password_verify()
                // Login bem sucedido
                $_SESSION['email'] = $email;
                header("Location: linksepaletas.php"); // Redirecionar para a página restrita após o login
            } else {
                echo "Senha incorreta";
            }
        } else {
            echo "Usuário não encontrado";
        }
    }
?>