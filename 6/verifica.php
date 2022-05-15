<?php

    $base = $_POST ["base"];
    $altura = $_POST ["altura"];

    if ($base == $altura) {

        echo "É um quadrado";
        

    } else {

        echo "É um retângulo";

    }
    

?>