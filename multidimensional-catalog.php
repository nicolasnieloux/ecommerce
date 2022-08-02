<?php
$products = [
    "iphone" => [
        "name" => "iPhone",
        "price" => 45000,
        "weight" => 200,
        "discount" => 15,
        "picture_url" => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-12-family-select-2021?wid=940&hei=1112&fmt=jpeg&qlt=90&.v=1617135051000",
    ],

    "ipad" => [
        "name" => "iPad",
        "price" => 30000,
        "weight" => 400,
        "discount" => 25,
        "picture_url" => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/ipad-air-select-wifi-blue-202203?wid=1765&hei=2000&fmt=jpeg&qlt=95&.v=1645065732688",
    ],
    "imac" => [
        "name" => "iMac",
        "price" => 70000,
        "weight" => 1200,
        "discount" => 0,
        "picture_url" => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/refurb-2019-imac-215-gallery?wid=1144&hei=1144&fmt=jpeg&qlt=90&.v=1559961087778",
    ]
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon site ecommerce</title>
</head>
<body>
<?php include 'header.php'; ?>
<?php include "my_functions.php"; ?>
<div>


    <div>
        <h3><?= $products["iphone"]["name"] ?></h3>
        <p>Prix TTC : <?php FormatPrice($products["iphone"]["price"]); ?></p>
        <p>Prix HT : <?php FormatPrice(priceExcludingVAT($products["iphone"]["price"]));  ?></p>
        <p>Prix Discount <?=$products["iphone"]["discount"] . "%"?> : <?php discountedPrice($products["iphone"]["price"], $products["iphone"]["discount"]);  ?></p>
        <img src="<?= $products["iphone"]["picture_url"] ?> " alt="Photo d'un iphone" width="250px" height="250px">
    </div>


<div>
    <h3><?= $products["imac"]["name"] ?></h3>
    <p>Prix TTC : <?php FormatPrice($products["imac"]["price"]); ?></p>
    <p>Prix HT : <?php FormatPrice(priceExcludingVAT($products["imac"]["price"]));  ?></p>
    <p>Prix Discount <?=$products["imac"]["discount"] . "%"?> <?php FormatPrice(discountedPrice($products["imac"]["price"],$products["imac"]["discount"]));  ?></p>
    <img src="<?= $products["imac"]["picture_url"] ?> " alt="Photo d'un imac" width="250px" height="250px">
</div>

<div>
    <h3><?= $products["ipad"]["name"] ?></h3>
    <p>Prix TTC : <?php FormatPrice($products ["ipad"]["price"]); ?></p>
    <p>Prix HT : <?php FormatPrice(priceExcludingVAT($products["ipad"]["price"]));  ?></p>
    <p>Prix Discount <?=$products["ipad"]["discount"] . "%"?> <?php FormatPrice(discountedPrice($products["ipad"]["price"],$products["ipad"]["discount"]));  ?></p>
    <img src="<?= $products ["ipad"]["picture_url"] ?> " alt="Photo d'un ipad" width="250px" height="250px">
</div>


</div>


<?php foreach ($products as $product) { ?>

<div>
    <h3><?= $product["name"] ?></h3>
    <p>Prix TTC : <?php FormatPrice($product["price"]);?></p>
    <p>Prix HT : <?php priceExcludingVAT($product["price"]);  ?></p>
    <?php if ($product["discount"] != null) { ?>
    <p>Prix Discount <?=$product["discount"] . "%"?>: <?php discountedPrice($product["price"],$product["discount"]);  ?></p>
    <?php }
    else { ?>
    <p> Attend les soldes </p>
    <?php } ?>
    <img src="<?= $product["picture_url"] ?> " alt="Photo d'un iphone" width="250px" height="250px">
    </div>

    <?php
}
?>


<?php include "footer.php"; ?>
</body>
</html>





