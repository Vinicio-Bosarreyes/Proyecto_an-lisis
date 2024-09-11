<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Industria Textil</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <h1>Productos</h1>
    <ul>
        <?php foreach ($industriaTextiles as $textil): ?>
            <li>
                <?php echo " " . $textil->getId() . " - " . $textil->getNombre() . " - " . $textil->getPrecio(); ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
