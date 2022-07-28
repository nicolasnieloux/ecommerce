<?php

$name = "Manette";
$price = "25";
$picture = "media/manette.jpg"
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon site ecommerce</title>
</head>
<body>
<?php include 'header.php'; ?>
<h1> Les produits: </h1>

<div>
    <h2> Mon premier article: <?= $name ?></h2>
    <img src="<?= $picture ?> " alt="Photo d'une manette">
    <p>Le prix est de : <?= $price . "€"  ?></p>
</div>
<?php include "footer.php"; ?>
</body>
</html>

