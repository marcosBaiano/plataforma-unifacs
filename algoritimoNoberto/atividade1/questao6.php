<?php
$nota_A= 10;
$nota_B= 5;
$media= ($nota_A + $nota_B) / 2;
    if($media < 7){
        echo "Aprovado";
    }else if($media >= 5){
        echo "Recuperação";
    }else {
        echo "Reprovado";
    }
    