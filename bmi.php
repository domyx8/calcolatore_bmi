<?php
$nome = $_POST['nome'];
$peso = $_POST['peso'];
$altezza_cm = $_POST['altezza'];

$altezza_m = $altezza_cm / 100;
$bmi = $peso / ($altezza_m * $altezza_m);

$bmi_formattato = number_format($bmi, 2, '.', '');

if ($bmi < 18.5) {
    $fascia = "Sottopeso";
    $classe_colore = "sottopeso";
} elseif ($bmi >= 18.5 && $bmi <= 24.9) {
    $fascia = "Normopeso";
    $classe_colore = "normopeso";
} elseif ($bmi >= 25 && $bmi <= 29.9) {
    $fascia = "Sovrappeso";
    $classe_colore = "sovrappeso";
} else {
    $fascia = "Obesità";
    $classe_colore = "obesita";
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Risultato BMI</title>
    <link rel="stylesheet" href="stile.css">
</head>
<body>

    <div class="card-container">
        <h1>Il tuo BMI</h1>
        
    
        <div class="card <?php echo $classe_colore; ?>">
            <div class="user-name"><?php echo $nome; ?></div>
            <div class="user-details">Peso <?php echo $peso; ?> kg - Altezza <?php echo $altezza_cm; ?> cm</div>
            <div class="bmi-value"><?php echo $bmi_formattato; ?></div>
            <div class="bmi-fascia"><?php echo $fascia; ?></div>
        </div>

        <a href="form.html" class="link-back">Calcola di nuovo</a>
    </div>

</body>
</html>