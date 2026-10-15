<?php
$nome=$_POST["nome"];
$peso=$_POST["peso"];
$altezza=$_POST["altezza"];

$metri=$altezza/(100);
$bmi=$peso/pow($metri,2);

echo "Il tuo MBI",

if ($bmi<18.5){

}
if ($bmi>18.5 && $bmi <24.9){
    
}
if ($bmi>24.9 && $bmi <29.9){
    
}
if ($bmi<29.9 && $bmi <){
    
}



?>