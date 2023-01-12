<?php
require_once __DIR__."/classes/product.php";
require_once __DIR__."/classes/category.php";
$categories=[
    $dog=new Category("Dog","<i class=\"fa-solid fa-dog\"></i>"),
    $cat=new Category("Cat","<i class=\"fa-solid fa-cat\"></i>"),
];
$products=[
    new Accessory("img/71xNkAf2olL._AC_SX522_.jpg","Bowl",12.33, $dog,"Inox Steel","Diameter: 30 cm"),
    new Accessory("img/collare-in-cuoio-cane_600x.webp","Leash",15.99, $dog,"Leather","Circumference: 26 cm"),
    new Toy("img/61woyXHXf+L._AC_SY355_.jpg","Peluche",7.99,$dog,"Sponge"),
    new Toy("img/71TIQiusW2L._AC_SX522_.jpg","Rolling Catnip Ball",20.99,$cat,"Catnip"),
    new Food("img/8007520023344_m0nejvu2virrkuqy.jpg","Dog Treats",5.99,$dog,"22/07/25"),
    new Food("img/1.webp","Kibble for Cats",5.99,$cat,"02/12/23")
];
try{
    $products[5]->setIngredients(["Salmon"]);
}catch(Exception $e){
    echo "Error:".$e->getMessage(); die;
}
try{
    $products[4]->setIngredients(["Chicken","Pork","Vegetables"]);
}catch(Exception $e){
    echo "Error:".$e->getMessage(); die;
}