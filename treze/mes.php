<?php

    $numbers = $_POST['num'];
    $numbers = explode ("-", $numbers);

    foreach ($numbers as $number) {
        echo "$number = ";
        if ($number == 1) {
            echo "Janeiro";
        } else if ($number == 2) {
            echo "Fevereiro";
        } else if ($number == 3) {
            echo "Março";
        } else if ($number == 4) {
            echo "Abril";
        } else if ($number == 5) {
            echo "Maio";
        } else if ($number == 6) {
            echo "Junho";
        } else if ($number == 7) {
            echo "Julho";
        } else if ($number == 8) {
            echo "Agosto";
        } else if ($number == 9) {
            echo "Setembro";
        } else if ($number == 10) {
            echo "Outubro";
        } else if ($number == 11) {
            echo "Novembro";
        } else if ($number == 12) {
            echo "Dezembro";
        } else {
            echo "Não existe mês com este número";
        }
        echo "<br>";
    }

?>