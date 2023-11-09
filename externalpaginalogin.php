<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php
            require_once ('lib.php');
            bootview();
            hearticon();
        ?>
        <link rel="stylesheet" href="externalpaginalogin.css">
    </head>
    <body>
        <div class="center">
            <h1>Login</h1>
            <form method="post">
                <div class="txt_field">
                    <input type="email" required>
                    <span></span>
                    <label>Email</label>
                </div>
                <div class="txt_field">
                    <input type="password" required>
                    <span></span>
                    <label>Senha</label>
                </div>
                <div class="pass">Esqueceu a senha?</div>
                <input type="submit" value="Login">
                <div class="signup_link">
                    Ainda não se cadastrou? <a href="#">Cadastre-se.</a>
                </div>
            </form>
        </div>
    </body>
</html>