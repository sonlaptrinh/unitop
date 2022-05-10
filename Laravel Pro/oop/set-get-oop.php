<?php

class Demo{

    private $attribute_1;

    public function setValue($value)
    {
        $this->attribute_1 = $value;
    }

    public function getValue()
    {
        return $this->attribute_1;
    }
    //.....
}

$a = new Demo;
// với private không can thiệp được phải dùng get và set
//$a -> attribute_1 = 20;
//echo $a -> attribute_1;

$a->setValue(50);
echo $a->getValue()."<br>";
//---------------------------------------------------------------------------
//class Rectangle
//{
//    public $width;
//    public  $height;
//    public  function getPerimeter()
//    {
//        return 2*($this->width * $this->height);
//    }
//    public function getArea()
//    {
//        return ($this->width*$this->height);
//    }
//}
//$a = new Rectangle;
//$a ->width = 10;
//$a ->height = 20;
//echo $a ->getPerimeter()."<br>";
//echo $a -> getArea();
//-----------------------------------------------------------------------------
class Rectangle
{
    private $width;
    private $height;
    public function setValue($width,$height)
    {
        $this -> width = $width;
        $this -> height = $height;
    }

    public  function getPerimeter()
    {
        return 2*($this->width * $this->height);
    }
    public function getArea()
    {
        return ($this->width*$this->height);
    }
}
$a = new Rectangle;
$a -> setValue(6,8);
//$a ->width = 10;
//$a ->height = 20;
echo $a ->getPerimeter()."<br>";
echo $a -> getArea();