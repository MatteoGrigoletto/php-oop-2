<?php
require __DIR__ . '/classes/storeclass.php';
require __DIR__ . '/classes/prodcutClass.php';
require __DIR__ . '/db.php';


$shop = new Store('PetsMania'); 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<div>
    <h1><?php echo $shop->nameStore  ?></h1>
</div>
<div>

<?php
foreach($productList as $product){
$prod = new Product($product);
$prod->selectType($product);
?>
<div class="img-card"></div>
<div class="info-card">
    <p> <?php echo $prod->name  ?></p>
    <p> <?php echo $prod->price  ?></p>
    <p> <?php echo $prod->tipology  ?></p>
    <p> <?php echo $prod->category  ?></p>
    <p> <?php echo $prod->calories  ?></p>
    <p> <?php echo $prod->size  ?></p>
    <p> <?php echo $prod->width ?></p>
    <p> <?php echo $prod->height  ?></p>
    <p> <?php echo $prod->material  ?></p>
    <p> <?php echo $prod->sound  ?></p>

</div>


<?php } ?>


</div>

    
</body>
</html>