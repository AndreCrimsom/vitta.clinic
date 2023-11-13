<?php 
    try {
        $conexao new PDO('mysql:host:192.168.8.6;dbname=vittaclinic', 'vittaclinic@192.168.8.6', 'amd123');
        $conexao->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $result = $conexao->query("SELECT * FROM cliente")-fetchAll();

        var_dump($result);
    } catch(PDOException $erro) {
        echo "ERRO =>" . $erro->getMessage();
    }
?>