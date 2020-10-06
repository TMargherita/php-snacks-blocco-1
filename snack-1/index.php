
<?php

$partite = [
  [
    "casa" => "Segafredo Virtus Bologna",
    "ospiti" => "OriOra Pistoia",
    "puntiCasa" => 90,
    "puntiOspiti" => 60
  ],
  [
  "casa" => "S.Bernardo-Cinelandia Cantù",
  "ospiti" => "Grissin Bon Reggio Emilia",
  "puntiCasa" => 85,
  "puntiOspiti" => 73
  ],
  [
  "casa" => "Dolomiti Energia Trentino",
  "ospiti" => "Germani Basket Brescia",
  "puntiCasa" => 63,
  "puntiOspiti" => 56
  ],
  [
  "casa" => "Virtus Roma",
  "ospiti" => "Pompea Fortitudo Bologna",
  "puntiCasa" => 91,
  "puntiOspiti" => 70
  ]
];

  for ($i=0; $i<count($partite); $i++ ) {
    echo $partite[$i]["casa"]." - ".$partite[$i]["ospiti"]." | ".$partite[$i]["puntiCasa"]."-".$partite[$i]["puntiOspiti"]."<br>";
  }
?>
