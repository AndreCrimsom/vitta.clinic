<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Preparar a instrução SQL para inserção de dados
        $query = "INSERT INTO usuarios (email, senha) VALUES (:email, :senha)";
        $stmt = $conn->prepare($query);
        
        // Bind dos parâmetros e execução da query
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        
        $stmt->execute();
    }
?>
<!doctype html>
<html lang ="pt-br"></html>
<html>
<head>
	<?php 
        require_once ('lib.php');
        charset();
        bootview();
        hearticon();
    ?>
</head>

<body>
    <div>
        <h2>Formulário de Registro</h2>
        <form method="post" action="login.php">
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