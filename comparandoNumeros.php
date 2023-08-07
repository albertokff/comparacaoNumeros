<?php

    /*
    Código para receber dois números inteiros como parâmetros.
    A função deve comparar os dois números e retornar uma string indicando qual número é maior ou se são iguais
    */


    function compararNumeros($a, $b){
      
        if ($a > $b) {
            echo "O primeiro número é maior que o segundo!";
        } else if ($b > $a) {
            echo "O segundo número é maior";
        } else if ($a == $b) {
            echo "Os números são iguais";
        }

    }

    compararNumeros(7, 7);

?>