<?php
    include 'config.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email=?");
        $stmt->execute([$email]); 
        $email = $stmt->fetch();
        if ($email) {
            $stmt = $conn->prepare("SELECT * FROM usuarios WHERE senha=?");
            $stmt->execute([$senha]); 
            $senha = $stmt->fetch();
            if ($senha) {
                echo "parabains";
            } else {
                echo "verifique sua senha";
            } 
        } else {
            echo "verifique seu email";
        } 

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
        <h2>Formulário de Login</h2>
        <form method="post" action="index.php">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required><br><br>
            
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" required><br><br>
            
            <input type="submit" value="Entrar">
        </form>
    </div>
        <a href="registro.php">REGISTRAR</a>
</body>
</html>