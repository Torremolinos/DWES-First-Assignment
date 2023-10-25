<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
            <?php

            $clientesSuscritos = array_filter($clientes, function ($cliente) {
                return $cliente["Cliente suscrito"] === true;
            });

            $nombresClientesSuscritos = array_map(function ($cliente) {
                return $cliente["Nombre"];
            }, $clientesSuscritos);

            echo "<h2>Clientes Suscritos:</h2>";
            echo "<ul>";
            foreach ($nombresClientesSuscritos as $nombre) {
                echo "<li>$nombre</li>";
            }
            echo "</ul>";
            ?>
            <?php
            // Filtrar clientes no suscritos
            $clientesNoSuscritos = array_filter($clientes, function ($cliente) {
                return $cliente["Cliente suscrito"] === false;
            });

            $nombresClientesNoSuscritos = array_map(function ($cliente) {
                return $cliente["Nombre"];
            }, $clientesNoSuscritos);

            echo "<h2>Clientes No Suscritos:</h2>";
            echo "<ul>";
            foreach ($nombresClientesNoSuscritos as $nombre) {
                echo "<li>$nombre</li>";
            }
            echo "</ul>";
            ?>
            <?php
            // Filtrar clientes con al menos un pedido
            $clientesConPedidos = array_filter($clientes, function ($cliente) {
                return isset($cliente["Listado de pedidos"]);
            });

            // Calcular el importe total de los pedidos para cada cliente
            $clientesConImporteTotal = array_map(function ($cliente) {
                $importeTotal = 0;
                if (isset($cliente["Listado de pedidos"])) {
                    foreach ($cliente["Listado de pedidos"] as $pedido) {
                        if (isset($pedido["Precio"])) {
                            $importeTotal += $pedido["Precio"];
                        }
                    }
                }
                return ["Nombre" => $cliente["Nombre"], "Importe Total" => $importeTotal];
            }, $clientesConPedidos);

            echo "<h2>Clientes con Pedidos y su Importe Total:</h2>";
            echo "<ul>";
            foreach ($clientesConImporteTotal as $cliente) {
                echo "<li>{$cliente['Nombre']} (Importe Total: {$cliente['Importe Total']})</li>";
            }
            echo "</ul>";
            ?>

</html>