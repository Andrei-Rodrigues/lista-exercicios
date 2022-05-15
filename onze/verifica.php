<?php

    $nums = $_POST["number"];
    $nums = explode(" ", $nums);
    
    foreach ($nums as $num) {
        if ($num > 0) {
            echo "O número $num é positivo";
        } else if ($num < 0) {
            echo "O número $num é negativo";
        } else {
            echo "O número $num é neutro";   
        }
        echo"<br>";
    }
?>