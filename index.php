<?php
$nome = $_POST["nome"];
$peso = $_POST["peso"];
$altezza = $_POST["altezza"];

$metri = $altezza / 100;
$bmi = $peso / pow($metri, 2);

if ($bmi < 18.5) {
    $fascia = "Sottopeso";
} elseif ($bmi < 25) {
    $fascia = "Normopeso";
} elseif ($bmi < 30) {
    $fascia = "Sovrappeso";
} else {
    $fascia = "Obesità";
}

header("Location: risultato.php?nome=" . urlencode($nome) .
    "&peso=" . $peso .
    "&altezza=" . $altezza .
    "&bmi=" . $bmi .
    "&fascia=" . urlencode($fascia));
exit;
?>
