<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['horario'])) {
    $horario = $_POST['horario'];

    $stmt = $conn->prepare("UPDATE horarios SET disponivel = FALSE WHERE horario = ?");
    $stmt->execute([$horario]);

    echo $stmt->rowCount() > 0 ? "Horário reservado com sucesso!" : "Nenhum horário foi atualizado. Verifique os dados.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sistema de Horários</title>
</head>
<body>
    <h2>Selecionar Horário Disponível</h2>
    <form method="post">
        <label for="horario">Escolha um horário:</label>
        <select name="horario">
            <?php
            $query = "SELECT * FROM horarios WHERE disponivel = TRUE";
            $stmt = $conn->query($query);
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value='".$row['horario']."'>".$row['horario']."</option>";
            }
            ?>
        </select><br><br>
        <input type="submit" value="Reservar">
    </form>
    <div>
        <?php
            $query = "SELECT * FROM horarios WHERE disponivel = FALSE";
            $stmt = $conn->query($query);
            $usadas = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if ($usadas) {
                foreach ($usadas as $horario) {
                    echo $horario['horario'] . "<br>";
                }
            } else {
                echo 'Todos os horários estão livres!';
            }
        ?>
    </div>
    <a href="apagarhorarios.php">LIMPAR HORARIOS<a>
</body>
</html>
