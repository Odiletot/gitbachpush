<?php
require "src/Controllers/Animal.class.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Page 2</h1>
    <?php
    $class = new Animal("Odile");
    $class->aboyer();
    ?>
</body>

</html>