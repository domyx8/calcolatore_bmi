<?php
$nome = $_POST["nome"];
$peso = $_POST["peso"];
$altezza = $_POST["altezza"];

$altezza = $altezza / 100;
$bmi = $peso / pow($altezza, 2);
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Risultato BMI</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Risultato BMI</h1>

    <p>Nome: <?php echo $nome; ?></p>
    <p>BMI: <?php echo round($bmi, 2); ?></p>

    <p>Categoria:
    <?php
    if ($bmi < 18.5) {
        echo "Sottopeso";
    } elseif ($bmi < 25) {
        echo "Normopeso";
    } elseif ($bmi < 30) {
        echo "Sovrappeso";
    } else {
        echo "Obesità";
    }
    ?>
    </p>

    <a href="index.html">Torna indietro</a>

</body>
</html>