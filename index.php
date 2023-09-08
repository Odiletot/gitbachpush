<?php
require "src/Controllers/Personne.class.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma page</title>
</head>

<body>
    <ul>
       <a href="public/page.php"><li>Page</li></a> 
    </ul>
    <h1>Ma première page</h1>
    <?php
    $class = new Personne("Odile");
    $class->parler();
    ?>
</body>

</html>