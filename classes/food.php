<?php
require_once __DIR__."/product.php";
class Food extends Product{
    private $ingredients;
    private $expirationDate;

    public function setIngredients($_ingredients){
        foreach($_ingredients as $ingredient){
            if(strlen($ingredient)>1){
                $this->ingredients=$_ingredients;
            }else{
                throw new Exception("You have to write a valid material, so you have to write more than 1 character.");
            }
        }
    }
    public function setExpirationDate($_expirationDate){
        $this->expirationDate=$_expirationDate;
    }
    public function getIngredients(){
        return $this->ingredients;
    }
    public function getExpirationDate(){
        return $this->expirationDate;
    }
    public function __construct(string $_image,string $_name,float $_price,Category $_category, string $_expirationDate)
    {
        parent::__construct($_image,$_name,$_price,$_category);
        $this->setExpirationDate($_expirationDate);
    }
}