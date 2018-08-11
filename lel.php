<?php

class Nums  
{
    public function __set($name,$value) {
      switch($name) { 
        case 'a': 
          return $this->setA($value);
        case 'b': 
          return $this->setB($value);
      }
    }

	
$numObj = new Nums();
echo $numObj->__set();
   

}


?>