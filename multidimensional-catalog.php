<?php require "my_functions.php";
require "products.php";
global $products;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon site ecommerce</title>
</head>
<body>
<?php include 'header.php'; ?>


<?php foreach ($products as $key => $product) { ?>

    <div>

        <h3><?= $product["name"] ?></h3>
        <p>Prix TTC : <?php formatPrice($product["price"]); ?></p>
        <p>Prix HT : <?php formatPrice(priceExcludingVAT($product["price"])); ?></p>
        <?php if ($product["discount"] != null) { ?>
            <p>Prix Discount <?= $product["discount"] . "%" ?>
                : <?php formatPrice(discountedPrice($product["price"], $product["discount"])); ?></p>
        <?php } else { ?>
            <p> Attend les soldes </p>
        <?php } ?>
        <img src="<?= $product["picture_url"] ?> " alt="Photo d'un iphone" width="250px" height="250px">
        <hr>
        <form method="post" action="cart.php" target="_blank">
            <label for="quantity"> Quantité :</label>
            <input type="number" name="quantity" min="0" max="10">
            <input type="hidden" name="key" value="<?= $key ?>">
            <hr>
            <input type="submit" value="Add to cart">
        </form>
    </div>

    <?php
}
?>


<?php include "footer.php"; ?>
</body>
</html>





