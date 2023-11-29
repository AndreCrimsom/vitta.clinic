<?php
    include 'config.php'; echo '<br>';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
    
        $query_check = "SELECT COUNT(*) as count FROM usuarios WHERE email = :email";
        $stmt_check = $conn->prepare($query_check);
        $stmt_check->bindParam(':email', $email);
        $stmt_check->execute();
        $result = $stmt_check->fetch(PDO::FETCH_ASSOC);
    
        if ($result['count'] > 0) {
            echo "Este email já está registrado. Escolha outro email.";
        } else {
            $query_insert = "INSERT INTO usuarios (email, senha) VALUES (:email, :senha)";
            $stmt_insert = $conn->prepare($query_insert);
            $stmt_insert->bindParam(':email', $email);
            $stmt_insert->bindParam(':senha', $senha);
            $stmt_insert->execute();
    
            echo "Registro realizado com sucesso!";
            header("Location: paginalogin.php");
        }
    }
?>
<!doctype html>
<html lang ="pt-br"></html>
<html>
<head>

</head>

<body>
    <div>
        <h2>Formulário de Registro</h2>
        <form method="post">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required><br><br>
            
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" required><br><br>
            
            <input type="submit" value="Registrar">
        </form>
    </div>
        <a href="paginalogin.php">ENTRAR</a>
</body>
</html>