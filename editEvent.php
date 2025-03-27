<?php

require_once("twig_carregar.php");
require_once("inc/banco.php");

$dados = $pdo->prepare("SELECT * FROM events WHERE id=:id");
$dados->bindValue(":id", $_GET["id"]);
$dados->execute();
$dados = $dados->fetch();
echo($twig->render("editEvent.html", [
    "titulo" => "Editar Eventos",
    "event" => $dados
]));
