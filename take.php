<?php
class calculation {
     
    // class atributes (variables)
    private $sum;
    private $diff;
    private $prod;
    private $div;
     
    function __construct() {
         
        
         
        // create image and assign it to our variable
        $this->image = imagecreatefromstring($buf);
         
        // extract image information
        $info = getimagesize($filename);
        $this->width = $info[0];
        $this->height = $info[1];
        $this->mimetype = $info['mime'];
    }
}
$image = new Image("image.png"); // If everything went well we have now read the image
?>