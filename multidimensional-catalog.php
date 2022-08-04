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

<!--<div>-->
<!---->
<!---->
<!--    <div>-->
<!--        <h3>--><?//= $products["iphone"]["name"] ?><!--</h3>-->
<!--        <p>Prix TTC : --><?php //FormatPrice($products["iphone"]["price"]); ?><!--</p>-->
<!--        <p>Prix HT : --><?php //FormatPrice(priceExcludingVAT($products["iphone"]["price"]));  ?><!--</p>-->
<!--        <p>Prix Discount --><?//=$products["iphone"]["discount"] . "%"?><!-- : --><?php //discountedPrice($products["iphone"]["price"], $products["iphone"]["discount"]);  ?><!--</p>-->
<!--        <img src="--><?//= $products["iphone"]["picture_url"] ?><!-- " alt="Photo d'un iphone" width="250px" height="250px">-->
<!--    </div>-->
<!---->
<!---->
<!--<div>-->
<!--    <h3>--><?//= $products["imac"]["name"] ?><!--</h3>-->
<!--    <p>Prix TTC : --><?php //FormatPrice($products["imac"]["price"]); ?><!--</p>-->
<!--    <p>Prix HT : --><?php //FormatPrice(priceExcludingVAT($products["imac"]["price"]));  ?><!--</p>-->
<!--    <p>Prix Discount --><?//=$products["imac"]["discount"] . "%"?><!-- --><?php //FormatPrice(discountedPrice($products["imac"]["price"],$products["imac"]["discount"]));  ?><!--</p>-->
<!--    <img src="--><?//= $products["imac"]["picture_url"] ?><!-- " alt="Photo d'un imac" width="250px" height="250px">-->
<!--</div>-->
<!---->
<!--<div>-->
<!--    <h3>--><?//= $products["ipad"]["name"] ?><!--</h3>-->
<!--    <p>Prix TTC : --><?php //FormatPrice($products ["ipad"]["price"]); ?><!--</p>-->
<!--    <p>Prix HT : --><?php //FormatPrice(priceExcludingVAT($products["ipad"]["price"]));  ?><!--</p>-->
<!--    <p>Prix Discount --><?//=$products["ipad"]["discount"] . "%"?><!-- --><?php //FormatPrice(discountedPrice($products["ipad"]["price"],$products["ipad"]["discount"]));  ?><!--</p>-->
<!--    <img src="--><?//= $products ["ipad"]["picture_url"] ?><!-- " alt="Photo d'un ipad" width="250px" height="250px">-->
<!--</div>-->
<!---->
<!---->
<!--</div>-->


<?php foreach ($products as $key => $product) { ?>

<div>

    <h3><?= $product["name"] ?></h3>
    <p>Prix TTC : <?php FormatPrice($product["price"]);?></p>
    <p>Prix HT : <?php FormatPrice(priceExcludingVAT($product["price"]));  ?></p>
    <?php if ($product["discount"] != null) { ?>
    <p>Prix Discount <?=$product["discount"] . "%"?>: <?php FormatPrice(discountedPrice($product["price"],$product["discount"]));  ?></p>
    <?php }
    else { ?>
    <p> Attend les soldes </p>
    <?php } ?>
    <img src="<?= $product["picture_url"] ?> " alt="Photo d'un iphone" width="250px" height="250px">
    <hr>
    <form method="post" action="cart.php" target="_blank">
        <label for="quantity"> Quantité :</label>
        <input type="number" id="quantity" name="quantity" min="0" max="10">
        <input type="hidden" id="info" name="key" value= "<?= $key?>" >
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





