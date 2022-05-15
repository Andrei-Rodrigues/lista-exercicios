<?php

$letterA = $_POST['letterNumberA'];
$letterB = $_POST['letterNumberB'];


if ($letterA > $letterB) {

    echo "$letterB";
    echo "$letterA";
} else {

    echo "$letterA";
    echo "$letterB";

}

?>