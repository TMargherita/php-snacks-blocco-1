
<?php
  $matches = [
    "Prima Partita" =>[
      "casa" => "Segafredo Virtus Bologna",
      "ospiti" => "OriOra Pistoia",
      "puntiCasa" => 90,
      "puntiOspiti" => 60
    ],
    "Seconda Partita" => [
      "casa" => "Pompea Fortitudo Bologna",
      "ospiti" => "Openjobmetis Varese",
      "puntiCasa" => 70,
      "puntiOspiti" => 91
    ],
    "Terza Partita" => [
      "casa" => "Grissin Bon Reggio Emilia",
      "ospiti" => "S.Bernardo-Cinelandia Cantù",
      "puntiCasa" => 85,
      "puntiOspiti" => 73
    ],
  ];

  var_dump ($matches["Prima Partita"]["casa"]["-"]["ospiti"][" | "]["puntiCasa"]["-"]["puntiOspiti"]);
?>;

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Matches</title>
  </head>
  <body>
    <h1></h1>
  </body>
</html>
