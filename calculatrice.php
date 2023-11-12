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
        if($number1 == 0 || $number2 == 0) {
            throw new Exception('Nombre invalide');
        } else {
            $resultat = $number1 / $number2;
            break;
        }
        
    case '*':
        $resultat = $number1 * $number2;
        break;
    }

    echo "Résultat = " . $resultat;

    ?>

    <br><a href="index.php">Retour à la calculatrice</a>