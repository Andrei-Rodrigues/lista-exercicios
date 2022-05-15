<?php

    $num = $_POST["number"];

    if ($num > 0) {
        echo "O número é positivo";
    } else if ($num < 0) {
        echo "O número é negativo";
    } else {
        echo "O número é neutro";
    }

?>