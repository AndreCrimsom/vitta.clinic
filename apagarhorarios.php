<?php
  include 'config.php';
  $stmt = $conn->prepare("UPDATE horarios SET disponivel = TRUE");
  $stmt->execute();
  header("Location: index.php");
?>
