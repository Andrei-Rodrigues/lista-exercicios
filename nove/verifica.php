<?php

    $metros2 = $_POST ['metros2'];
    $litros = $metros2 / 3;
    $latas = $litros / 18;
    $latas = ceil($latas);
    $valor = $latas * 60;

    echo "Para uma área de $metros2 metros quadrados, serão necessários $latas latas e valor total das será de $valor";

?>