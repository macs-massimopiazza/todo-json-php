<?php
$razze_cani = ["corgi", "carlino", "maltipoo", "pitpull", "golden retriver", "gatto"];

header('Content-Type: application/json');
header("Access-Control-Allow-Origin: http://localhost:5173");

echo json_encode($razze_cani);
