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
<section>
<?php
foreach($productList as $product){
$prod = new Product($shop,$product);
$prod->selectType($product);
?>
<div class="card">
<div class="img-card">
    <img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQovdvZcVmUCGv7zMIE-D8mQL4hnQhFl9cF78G7L3xp2EP-dXWQTf96-b5VskWsmY3NprpvUKXo_YkO4KHJPqrVC1_8-8wWxgD9-fYbsgszSx8JKTg2gdqU2w&usqp=CAE" alt="">
</div>
<div class="info-card">
    <p>Name: <?php echo $prod->name  ?></p>
    <p>Price: <?php echo $prod->price  ?></p>
    <p>tipology:<?php echo $prod->tipology  ?></p>
    <p>category: <?php echo $prod->category  ?></p>
    <p> <?php echo $prod->calories  ?></p>
    <p> <?php echo $prod->size  ?></p>
    <p><?php echo $prod->width ?></p>
    <p> <?php echo $prod->height  ?></p>
    <p><?php echo $prod->material  ?></p>
    <p> <?php echo $prod->sound  ?></p>

</div>
</div>
<?php } ?>



</section>
</body>
</html>