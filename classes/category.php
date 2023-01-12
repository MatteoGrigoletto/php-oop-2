<?php
require_once __DIR__."/../Traits/NameItem.php";
class Category{
    use NameItem;
    private $icon;

    public function setIcon($_icon){
        $this->icon=$_icon;
    }
    public function getIcon(){
        return $this->icon;
    }
    public function __construct(string $_name,string $_icon)
    {
        $this->setName($_name);
        $this->setIcon($_icon);
    }
}