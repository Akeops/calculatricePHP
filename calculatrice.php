<?php

$operator = $_POST['operator'];
$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
$resultat = 0;

switch ($operator) {
    case '+':
        $resultat = $number1 + $number2;
        break;
    case '-':
        $resultat = $number1 - $number2;
        break;
    case '/':
        $resultat = $number1 / $number2;
        break;
    case '*':
        $resultat = $number1 * $number2;
        break;
    }

    echo "Résultat = " . $resultat;