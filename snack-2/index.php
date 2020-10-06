<!--Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”-->

<?php
//controllo se sono inseriti tutti i dati
if(empty($_GET["name"]) || empty($_GET["email"]) || empty($_GET["age"])) {
  echo "Devi inserire tutti i dati";
  die;
}
//salvo i dati nelle variabili per poi verificarle
$name = $_GET["name"];
$email = $_GET["email"];
$age = $_GET["age"];

//verifico con un ciclo tutte le condizioni per accesso e stampo risultato
if(strlen($name) > 3 && strpos($email, ".") !== false && strpos($email, "@") !== false && is_numeric($age)) {
  echo "Accesso Riuscito";
} else {
  echo "Accesso negato";
}

?>
