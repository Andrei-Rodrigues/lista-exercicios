<?php
    session_start();
    require_once 'venda.class.php';

    if (!isset($_SESSION['vendas'])) {
        $_SESSION['vendas'] = [];
    }

    $metros2 = $_POST ['metros2'];
    $venda = new Venda ($metros2);

    $_SESSION['vendas'][] = serialize($venda);

    header('location:index.php');

?>