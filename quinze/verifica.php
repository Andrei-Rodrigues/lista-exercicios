<?php
require_once 'triangulo.class.php';

    $sideA = $_POST["sideA"];
    $sideB = $_POST["sideB"];
    $sideC = $_POST["sideC"];

    $triangulo = new Triangulo($sideA, $sideB, $sideC);

    if ($triangulo->verificaTriangulo()) {
        echo "É um triângulo do tipo " . $triangulo->verificaTipo();
    } else {
        echo "Não é um triângulo";
    }
    

?>