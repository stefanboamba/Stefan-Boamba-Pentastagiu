<?php
    function calcul(float $a, float $b, string $op): void
    {
        switch($op)
        {
            case '+':
            echo $a + $b;
            break;

            case '-':
                echo $a - $b;
            break;

            case '*':
                echo $a * $b;
            break;

            case '/':
            if ($b == 0){
                echo "Eroare! Nu se poate efectua impartirea la 0";
            }
            else {
                echo $a / $b;
            }
            break;

            default:
            echo "Eroare! Operator invalid!";
        }   
    }
?>