<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
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
            <?php
            include 'navbar.php'; echo '<br>';
            include 'conteudo1.php'; echo '<br>';
            include 'rodape1.php'; echo '<br>';
            include 'config.php';
            ?>
        </div>
    </body>
</html>