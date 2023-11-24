<?php
    include 'futuranavbar.php'; echo '<br>';
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
            include 'login.php';
            ?>
        </div>
    </body>
</html>