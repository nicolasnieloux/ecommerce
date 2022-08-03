<?php require "my_functions.php";
require "products.php";

$key=$_POST["key"];
$prixTTC=$products[$key]["price"];
$prixHT= priceExcludingVAT($products[$key]["price"]);
$TVA= $prixTTC-$prixHT;
$q=$_POST["quantity"];
$prixTotal=$prixTTC*$q;
?>

 <h3><?= $products[$key]["name"]; ?></h3>
<p>Prix TTC :<?php echo FormatPrice($prixTTC); ?></p>
<p>Prix HT :<?php echo FormatPrice($prixHT); ?></p>
<p>TVA: <?php echo FormatPrice($TVA); ?></p>
<p> Quantité:<?php echo $q; ?></p>
<p> Prix Total: <?php echo FormatPrice($prixTotal); ?> </p>
<img src="<?php echo $products[$key]["picture_url"] ?> " alt="Photo d'un iphone" width="250px" height="250px">





