<?php
    session_start();

    $servername = "192.168.8.6";
    $username = "vittaclinic@192.168.8.6";
    $password = "amd123";
    $dbname = "vittaclinic";
    
    // Conexão com o banco de dados
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Erro na conexão: " . $e->getMessage();
    }
?>