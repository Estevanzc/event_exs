<?php

require_once("vendor/autoload.php");
use Carbon\Carbon;

date_default_timezone_set("America/Sao_Paulo");
echo(Carbon::now()."<br>");
echo(Carbon::now()->addDay(10)."<br>");
echo(Carbon::now()->subWeek(100)."<br>");
echo(
    "Proxima data ".
    Carbon::createFromDate(2024)->addYear(4)->year."<br>"
);
echo(
    "Idade de Estevan ".
    Carbon::createFromDate(2008, 2, 26)->age."<br>"
);
echo(
    "Idade de Estevan ".
    Carbon::now()->diff(Carbon::createFromDate(2008, 2, 26))."<br>"
);

if (Carbon::now()->addDay(4)->isWeekend()) {
    echo("Final de semana <br>");
}

$date = "2008-02-26";
$date = Carbon::parse($date);
