<?php
class Rectangle{
    public $widht ;
    public $height;
    public function __construct()
    {
        $this -> widht =12;
        $this -> height = 30;
    }
// tự động khởi tạo khi được chạy
    public function getPerimeter(){
        return 2*($this->widht + $this->height);
    }
    public  function getArea(){
        return $this->widht*$this->height;
    }
}
$a = new Rectangle;
//$a -> widht = 5;
//$a -> height = 10;
echo $a -> getPerimeter();
//echo $a -> getArea();