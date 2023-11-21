<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vittaclinicteste";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "esta é a prova de que a conexão foi bem sucedida. <br>";

        $sqlconsulta = "SELECT * FROM consulta";
        $stmtconsulta = $conn->query($sqlconsulta);
        $resultadosconsulta = $stmtconsulta->fetchAll(PDO::FETCH_ASSOC);

        foreach ($resultadosconsulta as $linha){
            echo "<strong>id:</strong>" . $linha['id'] . "&nbsp" . "<strong>data:</strong>" . $linha['data_consulta'] . "&nbsp" . "<strong>email do cliente:</strong>" . $linha['email_cliente_fk'] . "&nbsp" . "<strong>email do medico:</strong>" . $linha['email_medico_fk'] . "<br>";
        }

    } catch(PDOException $e) {
        echo "Falha na conexão: " . $e->getMessage();
    }
    
?>
<?php 
/*
    try {
        $conexao = new PDO('mysql:host:localhost;dbname=vittaclinicteste', 'root', '');
        $conexao->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $result = $conexao->query("SELECT * FROM cliente")->fetchAll();

        var_dump($result);

    } catch(PDOException $erro) {
        echo "ERRO =>" . $erro->getMessage();
    }
*/
?>
