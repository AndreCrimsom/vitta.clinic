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
            include 'cabecalho.php'; echo '<br>';
            include 'conteudo1.php'; echo '<br>';
            include 'rodape.php'; echo '<br>';
            include 'testepdo.php';
            ?>
        </div>
    </body>
</html>