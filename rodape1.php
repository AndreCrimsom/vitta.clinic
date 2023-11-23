<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php 
            require_once ('lib.php');
        ?>
    </head>
    <body>
        <div>
            <div class="row texto1branco fonte-recoleta-bold-alt fonte-bold-700 fonte-3rem bgrosa">
                <div class="col-3">
                    <h1>Vitta.Clinic</h1>
                    <a href="apresentacao\funcionalidades.php" class="texto1branco fonte-1rem"><h2>Funcionalidades<h2></a>
                </div>
                <div class="col-3">
                    <h1>Nossa Equipe</h1>
                    <a href="apresentacao\participantes.php" class="texto1branco fonte-1rem"><h2>Participantes<h2></a>
                </div>
                <div class="col-3">
                    <h1>Fale Conosco</h1>
                    <div class="texto1branco fonte-1rem">
                        Vittaclinic@gmail.com
                    </div>
                    <div class="texto1branco fonte-1rem">
                        11 4002-8922
                    </div>
                    <div class="texto1branco fonte-1rem">
                        <?php instagramicon();?> Vittaclinic
                    </div>
                </div>
                <div class="col-3">
                    <h1>Ajuda</h1>
                </div>
            </div>
        </div>
        <?php
        echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>';
        ?>
    </body>
</html>