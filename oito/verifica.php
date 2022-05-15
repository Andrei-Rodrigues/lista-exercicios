<?php

    $sideA = $_POST["sideA"];
    $sideB = $_POST["sideB"];
    $sideC = $_POST["sideC"];


    if (($sideA && $sideB == $sideC) && ($sideA && $sideC == $sideB) && ($sideC && $sideB == $sideA)) {

        echo "Os valores dos lados representam um triângulo equilátero";

    } else if (($sideA == $sideB) || ($sideA == $sideC) || ($sideC == $sideB)) {

        echo "Os valores dos lados representam um triângulo Isósceles";

    } else {

        echo "Os valores dos lados representam um triângulo Escaleno";

    }

?>