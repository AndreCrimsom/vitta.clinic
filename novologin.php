<?php
    include 'config.php';
?>
<!doctype html>
<html lang ="pt-br"></html>
<html>
<head>
	<?php 
        require_once ('../lib.php');
        charset();
        bootview();
        hearticon();
    ?>
</head>

<body>
    <div>
        <h2>Formulário</h2>
        <form method="post" action="salvar_dados.php">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required><br><br>
            
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required><br><br>
            
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>