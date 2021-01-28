<?php
$x = $_GET['x'];
$y = $_GET['y'];
$var = $_GET['var'];

if($var == 'plus'){
    $Resultat = $x + $y;
    echo "Das Resultat ist: {$Resultat}";
}
if($var == 'minus'){
    $Resultat = $x - $y;
    echo "Das Resultat ist: {$Resultat}";
}
if($var == 'mal'){
    $Resultat = $x * $y;
    echo "Das Resultat ist: {$Resultat}";
}
if($var == 'div'){
    $Resultat = $x / $y;
    echo "Das Resultat ist: {$Resultat}";
}
?>