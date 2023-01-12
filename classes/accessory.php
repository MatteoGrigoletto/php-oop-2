<?php
require_once __DIR__."/product.php";
require_once __DIR__."/../Traits/Material.php";
class Accessory extends Product{
    use Material;
    private $dimensions;
    public function setDimensions($_dimensions){
        $this->dimensions=$_dimensions;
    }
    public function getDimensions(){
        return $this->dimensions;
    }
    public function __construct(string $_image,string $_name,float $_price,Category $_category,string $_materials,string $_dimensions)
    {
        parent::__construct($_image,$_name,$_price,$_category);
        $this->setMaterials($_materials);
        $this->setDimensions($_dimensions);
    }
}