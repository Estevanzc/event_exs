<?php

require_once("inc/banco.php");

echo("<pre>");
$title = $_POST["title"] ?? null;
if (!$title) {
    header("Location: index.php");
    exit();
}
$dados = $pdo->prepare("INSERT INTO events VALUES (default, :title, :event_date)");
$dados = $dados->execute([
    ":title" => $_POST["title"],
    ":event_date" => $_POST["event_date"],
]);

header("Location: compras.php");
