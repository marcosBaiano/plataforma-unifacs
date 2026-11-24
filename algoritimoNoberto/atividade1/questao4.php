<?php
$nota1 = 3;
$nota2 = 4;
$notas = [$nota1, $nota2];
$totalNotas = count($notas);
$somaNotas = $nota1 + $nota2;
$media = $somaNotas / $totalNotas;
echo "Tua nota ai: " . $media;
  if($media >= 5){
      echo " - parabens meu nobre";
  } else {
      echo " - se lacou irmao";
  }