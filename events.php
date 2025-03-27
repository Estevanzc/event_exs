<?php

require_once("twig_carregar.php");
require_once("inc/banco.php");

$dados = $pdo->query("SELECT * FROM compras");
$dados = $dados->fetchAll(PDO::FETCH_ASSOC);

echo($twig->render("event.html", [
    "titulo" => "compras",
    "compras" => $dados
]));
