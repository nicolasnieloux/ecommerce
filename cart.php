<?php require "my_functions.php";
require "products.php";
global $products;
$q = $_POST["quantity"];
$key = $_POST["key"];
$prixTTC = $products[$key]["price"];
$prixHT = (priceExcludingVAT($products[$key]["price"]));
$prixHTDiscount = priceExcludingVAT(discountedPrice($products[$key]["price"], $products[$key]["discount"]));
$TVA = ($prixTTC - $prixHT);
$TVAdiscount = discountedPrice($products[$key]["price"], $products[$key]["discount"]) - $prixHTDiscount;
$prixTotal = $prixTTC * $q;
$transporteur="La Poste";
if (isset($_POST['transporteur'])) {
    $transporteur = $_POST['transporteur'];
}
var_dump($_POST);
?>

<?php //ValidQuantity($q); ?>


<h3><?= $products[$key]["name"]; ?></h3>
<p>Prix TTC Unitaire :<?php echo FormatPrice($prixTTC); ?></p>

<?php if ($products[$key]["discount"] != null) { ?>
    <p>Prix Discount TTC Unitaire <?php echo $products[$key]["discount"] . "%" ?>
        : <?php FormatPrice(discountedPrice($products[$key]["price"], $products[$key]["discount"])); ?></p>
    <p>Quantité : <?php echo $q; ?></p>
    <p> Prix Total: <?php FormatPrice(discountedPrice($products[$key]["price"], $products[$key]["discount"]) * $q); ?> </p>
    <p>Prix Total HT :<?php FormatPrice($prixHTDiscount * $q); ?></p>
    <p>TVA: <?php FormatPrice($TVAdiscount * $q); ?></p>


    <form method=post>
        <label for="transporteur">Choisir son transporteur:</label>
        <select name="transporteur">
            <option value="La Poste">La Poste</option>
            <option value="Amazon">Amazon</option>
        </select>
        <br><br>
        <input type="hidden" value="<?= $_POST["quantity"]; ?>" name="quantity">
        <input type="hidden" value="<?= $_POST["key"] ?>" name="key">
        <input type="submit" value="Valider">
    </form>
    <p>Prix transport : <?php FormatPrice(deliver($transporteur, $products[$key]["weight"] ,$prixTotal));?></p>


    <p> Prix Total TTC: <?php echo FormatPrice(discountedPrice($products[$key]["price"], $products[$key]["discount"]) * $q + deliver($transporteur, $products[$key]["weight"] ,$prixTotal)) ; ?> </p>
<?php } else { ?>


    <p>Quantité : <?php echo $q; ?></p>
    <p> Prix Total: <?php FormatPrice($prixTotal); ?> </p>
    <p>Prix Total HT :<?php  FormatPrice($prixHT * $q); ?></p>
    <p>TVA: <?php FormatPrice($TVA * $q); ?></p>

    <form method=post>
        <label for="transporteur">Choisir son transporteur:</label>
        <select name="transporteur">
            <option value="La Poste">La Poste</option>
            <option value="Amazon">Amazon</option>
        </select>
        <br><br>
        <input type="hidden" value="<?= $_POST["quantity"]; ?>" name="quantity">
        <input type="hidden" value="<?= $_POST["key"] ?>" name="key">
        <input type="submit" value="Valider">
    </form>
    <p>Prix transport : <?php FormatPrice(deliver($transporteur, $products[$key]["weight"] ,$prixTotal));?></p>

     <p> Prix Total TTC: <?php FormatPrice($products[$key]["price"] * $q + deliver($transporteur, $products[$key]["weight"] ,$prixTotal)) ; ?> </p>
<?php }
?>
<img src="<?php echo $products[$key]["picture_url"]; ?> " alt="Photo d'un iphone" width="250px" height="250px">

