<?php

    $name = $_POST["name"];
    $age = $_POST["num"];

    if ($age >= 18) {

        echo "$name é maior de idade";

    } else {
        echo "$name é menor de idade";
    }

?>