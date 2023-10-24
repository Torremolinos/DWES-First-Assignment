<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ol>
        <?php foreach ($clientes as $cliente) : ?>
            <li>
                <?php echo $cliente['Nombre']; ?>
            <?php endforeach; ?>
            <br>
            </li>

</html>