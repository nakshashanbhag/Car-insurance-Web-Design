<?php 
 
class Nums  
  {
    private $a = 7;
    private $b = 8;

    public function sum() 
    {
        return $this->a + $this->b;
    }
	
	public function diff()
	{ 
		return $this->a - $this->b;
	}
	
	public function prod()
	{
		return $this->a * $this->b;
	}
	
	public function div()
	{ 
		return $this->a / $this->b;
	}	
  }

$numObj = new Nums();
echo $numObj->sum()."<br>";
echo $numObj->diff()."<br>";
echo $numObj->prod()."<br>";
echo $numObj->div()."<br>";

?>