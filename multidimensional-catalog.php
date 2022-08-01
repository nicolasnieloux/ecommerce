<?php
$products = [
    "iphone" => [
        "name" => "iPhone",
        "price" => 45000,
        "weight" => 200,
        "discount" => 10,
        "picture_url" => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-12-family-select-2021?wid=940&hei=1112&fmt=jpeg&qlt=90&.v=1617135051000",
    ],

    "ipad" => [
        "name" => "iPad",
        "price" => 30000,
        "weight" => 400,
        "discount" => 20,
        "picture_url" => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/ipad-air-select-wifi-blue-202203?wid=1765&hei=2000&fmt=jpeg&qlt=95&.v=1645065732688",
    ],
    "imac" => [
        "name" => "iMac",
        "price" => 70000,
        "weight" => 1200,
        "discount" => 5,
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

<div>


    <div>
        <h3><?= $products["iphone"]["name"] ?></h3>
        <p>Prix : <?= $products["iphone"]["price"] . " centimes" ?></p>
        <img src="<?= $products["iphone"]["picture_url"] ?> " alt="Photo d'un iphone" width="250px" height="250px">
    </div>


    <div>
        <h3><?= $products["imac"]["name"] ?></h3>
        <p>Prix : <?= $products["imac"]["price"] . " centimes" ?></p>
        <img src="<?= $products["imac"]["picture_url"] ?> " alt="Photo d'un imac" width="250px" height="250px">
    </div>

    <div>
        <h3><?= $products["ipad"]["name"] ?></h3>
        <p>Prix : <?= $products ["ipad"]["price"] . " centimes" ?></p>
        <img src="<?= $products ["ipad"]["picture_url"] ?> " alt="Photo d'un ipad" width="250px" height="250px">
    </div>


</div>


<?php foreach ($products as $product) { ?>

    <div>
        <h3><?= $product["name"] ?></h3>
        <p>Prix : <?= $product["price"] . " centimes" ?></p>
        <img src="<?= $product["picture_url"] ?> " alt="Photo d'un iphone" width="250px" height="250px">
    </div>

    <?php
}
?>


<?php include "footer.php"; ?>
</body>
</html>





