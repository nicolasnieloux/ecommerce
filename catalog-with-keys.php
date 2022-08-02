<?php
$iphone = [
    "name" => "iPhone",
    "price" => 45000,
    "weight" => 200,
    "discount" => 0,
    "picture_url" => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-12-family-select-2021?wid=940&hei=1112&fmt=jpeg&qlt=90&.v=1617135051000",
];

$ipad = [
    "name" => "iPad",
    "price" => 30000,
    "weight" => 400,
    "discount" => 20,
    "picture_url" => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/ipad-air-select-wifi-blue-202203?wid=1765&hei=2000&fmt=jpeg&qlt=95&.v=1645065732688",
];

$imac = [
    "name" => "iMac",
    "price" => 70000,
    "weight" => 1200,
    "discount" => 20,
    "picture_url" => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/refurb-2019-imac-215-gallery?wid=1144&hei=1144&fmt=jpeg&qlt=90&.v=1559961087778",
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
    <h3><?= $iphone["name"]?></h3>
    <p>Prix TTC : <?php FormatPrice($iphone["price"]);  ?></p>
    <p>Prix HT : <?php FormatPrice(priceExcludingVAT($iphone["price"]));  ?></p>
    <?php if ($iphone["discount"] != null){ ?>
        <p>Prix Discount: <?php FormatPrice(discountedPrice($iphone["price"], $iphone["discount"]));  ?></p>
    <?php } else{ ?>
        <p> Attend les soldes </p>
    <?php } ?>
    <img src="<?= $iphone["picture_url"] ?> " alt="Photo d'un iphone" width="250px" height="250px">
</div>


<div>
    <h3><?= $imac ["name"] ?></h3>
    <p>Prix : <?php FormatPrice($imac["price"]); ?></p>
    <p>Prix HT : <?php FormatPrice(priceExcludingVAT($imac["price"]));  ?></p>
    <?php if ($imac["discount"] != null){ ?>
    <p>Prix Discount : <?php FormatPrice(discountedPrice($imac["price"],$imac["discount"]));  ?></p>
    <?php }
    else{ ?>
        <p> Attend les soldes </p>
    <?php }
    ?>
    <img src="<?= $imac["picture_url"] ?> " alt="Photo d'un imac" width="250px" height="250px">
</div>

<div>
    <h3><?= $ipad ["name"] ?></h3>
    <p>Prix TTC: <?php FormatPrice($ipad["price"]); ?></p>
    <p>Prix HT : <?php FormatPrice(priceExcludingVAT($ipad["price"]));  ?></p>
    <p>Prix Discount : <?php FormatPrice(discountedPrice($ipad["price"], $ipad["discount"]));  ?></p>
    <img src="<?= $ipad["picture_url"] ?> "  alt="Photo d'un ipad" width="250px" height="250px">
</div>
</div>



<?php include "footer.php"; ?>
</body>
</html>




