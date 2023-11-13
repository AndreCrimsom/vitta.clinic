<?php 
    try {
        $conexao = new PDO('mysql:host:localhost;dbname=vittaclinicteste', 'tecnico', '');
        $conexao->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $result = $conexao->query("SELECT * FROM cliente")->fetchAll();

        var_dump($result);

    } catch(PDOException $erro) {
        echo "ERRO =>" . $erro->getMessage();
    }
?>