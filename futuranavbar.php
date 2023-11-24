<?php
session_start();
?>
<?php
    include 'config.php';
    $estado = 0;
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
                $_SESSION['email'] = $email = $_POST['email'];
                if ($_SESSION['email'] == '') {
                    $estado = 0;
                } else {
                    $estado = 1;
                } 
            } else {
                echo "verifique sua senha";
            } 
        } else {
            echo "verifique seu email";
            $email = '';
        } 
        
        $stmt->execute();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php 
            require_once ('lib.php');
        ?>
    </head>
    <body>
        <div>
            <?php
                if (@$estado == '0') {
                    echo "FAÇA LOGIN POR FAVOR";
                } else {
                    echo 'Usuario: ' . @$_SESSION['email'];
                } 
            ?>
        </div>
    </body>