<?php require "my_functions.php";
require "products.php";
global $products;
$productQuantity = $_POST["quantity"];
$key = $_POST["key"];
$prixTTC = $products[$key]["price"];
$prixHT = (priceExcludingVAT($products[$key]["price"]));
$prixHTDiscount = priceExcludingVAT(discountedPrice($products[$key]["price"], $products[$key]["discount"]));
$TVA = ($prixTTC - $prixHT);
$TVAdiscount = discountedPrice($products[$key]["price"], $products[$key]["discount"]) - $prixHTDiscount;
$prixTotal = $prixTTC * $productQuantity;


$transporteur = "La Poste";
if (isset($_POST['transporteur'])) {
    $transporteur = $_POST['transporteur'];
}

if (isset($_POST['quantity'])) {
    $productQuantity = $_POST['quantity'];
}

var_dump($_POST);
?>

<?php validQuantity($productQuantity); ?>


<h3><?= $products[$key]["name"]; ?></h3>
<p>Prix TTC Unitaire :<?php formatPrice($prixTTC); ?></p>

<?php if ($products[$key]["discount"] != null) { ?>
    <p>Prix Discount TTC Unitaire <?php echo $products[$key]["discount"] . "%" ?>
        : <?php formatPrice(discountedPrice($products[$key]["price"], $products[$key]["discount"])); ?></p>
    <p>Quantité : <?php echo $productQuantity; ?></p>
    <p> Prix
        Total: <?php formatPrice(discountedPrice($products[$key]["price"], $products[$key]["discount"]) * $productQuantity); ?> </p>
    <p>Prix Total HT :<?php formatPrice($prixHTDiscount * $productQuantity); ?></p>
    <p>TVA: <?php formatPrice($TVAdiscount * $productQuantity); ?></p>


    <form method=post>
        <label for="transporteur">Choisir son transporteur:</label>
        <select name="transporteur">
            <option value="La Poste">La Poste</option>
            <option value="Amazon">Amazon</option>
        </select>
        <br><br>
<!--        <input type="hidden" value="--><?//= $_POST["quantity"]; ?><!--" name="quantity">-->
<!--        <input type="hidden" value="--><?//= $_POST["key"] ?><!--" name="key">-->
        <input type="submit" value="Valider">
    </form>
    <p>Prix transport : <?php formatPrice(deliver($transporteur, $products[$key]["weight"], $prixTotal)); ?></p>


    <p> Prix Total
        TTC: <?php formatPrice(discountedPrice($products[$key]["price"], $products[$key]["discount"]) * $productQuantity + deliver($transporteur, $products[$key]["weight"], $prixTotal)); ?> </p>
<?php } else { ?>


    <p>Quantité : <?php echo $productQuantity; ?></p>
    <p> Prix Total: <?php formatPrice($prixTotal); ?> </p>
    <p>Prix Total HT :<?php formatPrice($prixHT * $productQuantity); ?></p>
    <p>TVA: <?php formatPrice($TVA * $productQuantity); ?></p>

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
    <p>Prix transport
        : <?php formatPrice(deliver($transporteur, $products[$key]["weight"] * $productQuantity, $prixTotal)); ?></p>

    <p> Prix Total
        TTC: <?php formatPrice($products[$key]["price"] * $productQuantity + deliver($transporteur, $products[$key]["weight"] * $productQuantity, $prixTotal)); ?> </p>


<?php }
?>
<img src="<?php echo $products[$key]["picture_url"]; ?> " alt="Photo d'un iphone" width="250px" height="250px">

