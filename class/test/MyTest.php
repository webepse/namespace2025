<?php 
namespace App\test;
class MyTest{
    
    public function __construct(public $nom)
    {
        
    }

    public function crier(){
        echo "<div>".$this->nom."</div>";
    }



}