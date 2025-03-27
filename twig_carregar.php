<?php

require_once("vendor/autoload.php");

$loader = new \Twig\Loader\FilesystemLoader("./templates"); //html files loader
$twig = new \Twig\Environment($loader); //twig object creater
