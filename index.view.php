<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Gente suscrita
    <ol>
        <?php foreach ($clientes as $cliente) : ?>
            <li>
            <?= $cliente['Nombre']; ?> (<?= $cliente['Lista de pedidos']; ?>), por <?= $cliente['autor'] ?>
           
            </li>
            <?php endforeach; ?>
    </ol>
    </h1>
</html>