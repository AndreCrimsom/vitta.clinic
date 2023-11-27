<!DOCTYPE html>
<html lang="pt-br">
    <head>

    </head>
    <body>
            <div class="row bgrosa">
                <div class="col-4">
                    <div class="row">
                        <div class="col-6">
                            <div class="d-flex justify-content-center">
                                <div class="texto1branco fonte-recoleta-bold-alt fonte-bold-700 fonte-1rem">
                                    <?php
                                        if (isset($_SESSION['email'])) {
                                            echo "USUARIO: " . $_SESSION['email']['email'];
                                        }
                                        else {
                                            echo '<div class="texto1branco fonte-recoleta-bold-alt fonte-bold-700 fonte-2rem">
                                            <a href="paginalogin.php" class="linklimpobranco">Entre / faça seu cadastro</a> </div>';
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <?php
                                if (isset($_SESSION['email'])) {
                                    echo '<div class="d-flex justify-content-center">
                                    <a href="sair.php" class="texto1branco fonte-recoleta-bold-alt fonte-bold-700 fonte-2rem">Sair</a>
                                    </div>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="d-flex justify-content-center">
                        <h1 class="texto1branco fonte-recoleta-bold-alt fonte-bold-700 fonte-3rem">Vitta.Clinic</h1>
                    </div>
                </div>
                <div class="col-4">
                    
                </div>
            </div>
    </body>
</html>