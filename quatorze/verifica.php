<?php
require_once 'retangulo.class.php';

    $base = $_POST ["base"];
    $altura = $_POST ["altura"];

    $retangulo = new Retangulo($base, $altura);

    echo "É um ". $retangulo->verificaRetangulo();
    echo "<br>Área: ". $retangulo->calculaArea();
    echo "<br>Perimetro: ". $retangulo->calculaPerimetro();
    

?>