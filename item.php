<?php

$Name = "Manette";
$Price = "25";
$Picture = "Media/manette.jpg"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mon site ecommerce</title>
</head>
<body>
<h1> Les produits: </h1>

<h2> Mon premier article: <?= $Name ?></h2>

<div>
    <img src = "<?= $Picture ?> " alt="Photo d'une manette">
</div>

    <h2>Le prix est de : <?= "${Price}€" ?></h2>


</body>
</html>

