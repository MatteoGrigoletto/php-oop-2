<?php
require_once __DIR__."/classes/product.php";
require_once __DIR__."/classes/category.php";
require_once __DIR__."/classes/food.php";
require_once __DIR__."/classes/toy.php";
require_once __DIR__."/classes/accessory.php";
require_once __DIR__."/db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Pet Shop</title>
</head>
<body>
    <header class="container text-center py-4">
        <h1 class="fs-1 fw-bold">Pet Shop</h1>
    </header>
    <main class="my-5 py-5">
        <div class="container d-flex flex-wrap justify-content-around">
            <?php foreach($products as $product){ 
                    if(get_class($product) == "Accessory"){
            ?>
                <div class="card my-4" style="width: 18rem;">
                    <img src=<?php echo $product->getImage() ?> class="card-img-top" alt=<?php echo $product->getName() ?>>
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $product->getName() ?></h4>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item fs-2">
                            <?php echo $product->getCategory()->getIcon()  ?>
                        </li>
                        <li class="list-group-item">
                            <?php echo $product->getDimensions()  ?>
                        </li>
                        <li class="list-group-item">
                            <span>Materials: </span> 
                            <?php echo $product->getMaterials() ?>
                        </li>
                    </ul>
                    <div class="card-body">
                        <button href="#" class="btn btn-primary me-3">Buy</button>
                        <a href="#" class="card-link me-4">More info</a>
                        <span class="text-end"><?php echo $product->getPrice() ?>$</span>
                    </div>
                </div>
            <?php 
                    }elseif(get_class($product) == "Toy"){                  
            ?>
                <div class="card my-4" style="width: 18rem;">
                    <img src=<?php echo $product->getImage() ?> class="card-img-top" alt=<?php echo $product->getName() ?>>
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $product->getName() ?></h4>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item fs-2">
                            <?php echo $product->getCategory()->getIcon()?>
                        </li>
                        <li class="list-group-item">
                            <span>Materials: </span>
                            <?php echo $product->getMaterials() ?>
                        </li>
                    </ul>
                    <div class="card-body">
                        <button href="#" class="btn btn-primary me-3">Buy</button>
                        <a href="#" class="card-link me-4">More info</a>
                        <span class="text-end"><?php echo $product->getPrice() ?>$</span>
                    </div>
                </div>
            <?php 
                    }elseif(get_class($product) == "Food"){                  
            ?>
                <div class="card my-4" style="width: 18rem;">
                    <img src=<?php echo $product->getImage() ?> class="card-img-top" alt=<?php echo $product->getName() ?>>
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $product->getName() ?></h4>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item fs-2">
                            <?php echo $product->getCategory()->getIcon()  ?>
                        </li>
                        <li class="list-group-item">
                            <h5>Ingredients:</h5>
                            <ul>
                                <?php foreach($product->getIngredients() as $ingredient){ ?>
                                    <li><?php echo $ingredient ?></li>
                                <?php } ?>
                            </ul>
                        </li>
                        <li class="list-group-item"><?php echo $product->getExpirationDate() ?></li>
                    </ul>
                    <div class="card-body">
                        <button href="#" class="btn btn-primary me-3">Buy</button>
                        <a href="#" class="card-link me-4">More info</a>
                        <span class="text-end"><?php echo $product->getPrice() ?>$</span>
                    </div>
                </div>
            <?php
                    }
                } 
            ?>
        </div>
    </main>    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>