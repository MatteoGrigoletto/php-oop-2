<?php
require_once __DIR__."/product.php";
require_once __DIR__."/../Traits/Material.php";
class Toy extends Product{
    use Material;
    public function __construct(string $_image,string $_name,float $_price,Category $_category,string $_materials)
    {
        parent::__construct($_image,$_name,$_price,$_category);
        $this->setMaterials($_materials);
    }
}