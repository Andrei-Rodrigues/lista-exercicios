<?php

    $valorTotal = $_POST['total'];
    $valorRecebido = $_POST['recebido'];

    $troco = abs($valorTotal - $valorRecebido);
    echo "$troco <br><br>";

    if ($troco >= 200) {
        $notas200 = floor($troco / 200);
        $troco = $troco - $notas200 * 200;
        echo "$notas200 notas de 200<br><br>";
    }

    if ($troco >= 100) {
        $notas100 = floor($troco / 100);
        $troco = $troco - $notas100 * 100;
        echo "$notas100 notas de 100<br><br>";
    }

    if ($troco >= 50) {
        $notas50 = floor($troco / 50);
        $troco = $troco - $notas50 * 50;
        echo "$notas50 notas de 50<br><br>";
    }

    if ($troco >= 20) {
        $notas20 = floor($troco / 20);
        $troco = $troco - $notas20 * 20;
        echo "$notas20 notas de 20<br><br>";
    }

    if ($troco >= 10) {
        $notas10 = floor($troco / 10);
        $troco = $troco - $notas10 * 10;
        echo "$notas10 notas de 10<br><br>";
    }

    if ($troco >= 5) {
        $notas5 = floor($troco / 5);
        $troco = $troco - $notas5 * 5;
        echo "$notas5 notas de 5<br><br>";
    }

    if ($troco >= 2) {
        $notas2 = floor($troco / 2);
        $troco = $troco - $notas2 * 2;
        echo "$notas2 notas de 2<br><br>";
    }

    if ($troco >= 1) {
        $moedas1 = floor($troco);
        $troco = $troco - $moedas1;
        echo "$moedas1 moedas de 1<br><br>";
    }

    if ($troco >= 0.50) {
        $moedas50 = floor($troco / 0.50);
        $troco = $troco - $moedas50 * 0.50;
        echo "$moedas50 moedas de 50<br><br>";
    }

    if ($troco >= 0.25) {
        $moedas25 = floor($troco / 0.25);
        $troco = $troco - $moedas25 * 0.25;
        echo "$moedas25 moedas de 25<br><br>";
    }

    if ($troco >= 0.10) {
        $moedas10 = floor($troco / 0.10);
        $troco = $troco - $moedas25 * 0.10;
        echo "$moedas10 moedas de 10<br><br>";
    }

    if ($troco >= 0.05) {
        $moedas5 = floor($troco / 0.05);
        $troco = $troco - $moedas5 * 0.05;
        echo "$moedas5 moedas de 5<br><br>";
    }

    if ($troco >= 0.01) {
        $moedas1 = floor($troco / 0.01);
        $troco = $troco - $moedas1 * 0.01;
        echo "$moedas1 moedas de 1<br><br>";
    }

?>