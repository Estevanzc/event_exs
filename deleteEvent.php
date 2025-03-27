<?php

require_once("inc/banco.php");

$dados = $pdo->prepare("DELETE FROM events WHERE id=:id");
$dados = $dados->execute([":id" => $_GET["id"]]);

header("Location: index.php");
