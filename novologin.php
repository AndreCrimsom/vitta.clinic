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
        <form method="post" action="processa_cadastro.php">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required><br><br>
            
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" required><br><br>
            
            <input type="submit" value="Registrar">
        </form>
    </div>
</body>
</html>