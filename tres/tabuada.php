<?php

    $number = $_POST["num"];

    for ($i=1; $i <= 10; $i++) {
        $resultado = $i * $number;
        echo "$i * $number = $resultado";
        echo "<br><br>";

    }

?>