<?php

require_once("inc/banco.php");

$id = $_POST["id"] ?? null;
if (!$id) {
    header("Location: index.php");
    exit();
}
$dados = $pdo->prepare("UPDATE events SET title=:title, event_date=:event_date WHERE id=:id");
$dados = $dados->execute([
    ":id" => $_POST["id"],
    ":title" => $_POST["title"],
    ":event_date" => $_POST["event_date"],
]);

header("Location: index.php");
