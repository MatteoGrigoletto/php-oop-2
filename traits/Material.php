<?php
trait Material{
    private $materials;

    public function setMaterials($_materials){
        $this->materials=$_materials;
    }
    public function getMaterials(){
        return $this->materials;
    }
}