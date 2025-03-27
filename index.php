<?php

require_once("twig_carregar.php");
require_once("inc/banco.php");
use Carbon\Carbon;

$select_type = [
    " ORDER BY title asc",
    " ORDER BY title desc",
    " ORDER BY event_date asc",
    " ORDER BY event_date desc",
];
$select_value = $_GET["select_type"] ?? null;
$dados = $pdo->query("SELECT * FROM events".($select_value ? $select_type[$select_value] : ""));
$dados = $dados->fetchAll(PDO::FETCH_ASSOC);

foreach ($dados as &$event) {
    $event["is_weekend"] = Carbon::parse($event["event_date"])->isWeekend();
}

echo($twig->render("index.html", [
    "title" => "Home",
    "events" => $dados
]));