<?php

$clientes = [
    [
        "Nombre" => "Mateo Matao",
        "Listado de pedidos" => ["Articulos" => "Java for dummies", "Precio" => 12.5],
        "Cliente suscrito" => true
    ],
    ["Nombre" => "Asalariado Fernandez", "Listado de pedidos" => ["Articulos" => "El monstruo de Microsoft duerme debajo de mi cama", "Precio" =>20]
,   "Cliente suscrito" => true],
    [
        "Nombre" => "Maria Galletas", "Listado de pedidos" => ["Articulos" => "El pseudoCódigo mato a mi padre y violó a mi madre", "Precio" => 15],
        "Cliente suscrito" => true
    ],
    [
        "Nombre" => "Ofelia Ofensa",
        "Cliente suscrito" => false
    ],
    [ "Nombre"=> "El metralletas",
    "Cliente suscrito" => false]
];
require "index.view.php";