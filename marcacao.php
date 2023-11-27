<?php
    include 'config.php'; echo '<br>';

// Verificar se um horário foi selecionado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $horarioSelecionado = $_POST['horario'];

    // Atualizar o horário selecionado no banco de dados
    $stmt = $conn->prepare('UPDATE horarios SET disponivel = 0 WHERE horario = :horario');
    $stmt->bindParam(':horario', $horarioSelecionado);
    $stmt->execute();

    echo 'Horário selecionado com sucesso!';
}

// Exibir os horários disponíveis
$stmt = $conn->query('SELECT * FROM horarios WHERE disponivel = 1');
$horarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sistema de Horários</title>
</head>
<body>
    <h1>Horários Disponíveis</h1>

    <?php if (count($horarios) > 0): ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <select name="horario">
                <?php foreach ($horarios as $horario): ?>
                    <option value="<?php echo $horario['horario']; ?>"><?php echo $horario['horario']; ?></option>
                <?php endforeach; ?>
            </select>

            <input type="submit" value="Selecionar">
        </form>
    <?php else: ?>
        <p>Não há horários disponíveis!</p>
    <?php endif; ?>
</body>
</html>