<?php

    $numbers = $_POST["num"];
    $numbers = explode(",", $numbers);

    foreach ($numbers as $number) {

        for ($i=1; $i <= 10; $i++) {
            $resultado = $i * $number;
            echo "$i * $number = $resultado";
            echo "<br><br>";

        }
        echo "<br><br>";
    }
?>