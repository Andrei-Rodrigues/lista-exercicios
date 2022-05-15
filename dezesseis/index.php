<?php
session_start();
require_once 'venda.class.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venda de tintas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="container-fluid">
    <h1 class="text-center mt-1">Vendas de tintas</h1>

    <form action="venda.php" method="post">

        <input type="number" name="metros2" placeholder="Metros quadrados" step="0.01" required class="form-control"><br>

        <input type="submit" value="Calcular" class="btn btn-success">
    </form>

    <div class="row mt-4">
        <div class="col-12">
            <?php
            if (isset($_SESSION['vendas'])) {
            ?>
            <table class="table table-light table-hover table-striped table-bordered">
                <thead class="text-center">
                    <tr>
                        <th>Metragem</th>
                        <th>Galões</th>
                        <th>Valor</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $vendas = $_SESSION['vendas'];

                    foreach ($vendas as $venda) {
                        $venda = unserialize($venda);
                        echo '<tr>';
                        echo '<td>'.$venda->metragem.'</td>';
                        echo '<td>'.$venda->calculaGaloes().'</td>';
                        echo '<td>R$ '.$venda->calculaCusto().'</td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
            <?php
            }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>