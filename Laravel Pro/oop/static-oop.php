<?php
class Rectangle{
    // Khai báo thuộc tính
    public static  $widht ;
    public static  $height;
   //Phương thức
    public static function getPerimeter(){
        return 2*(self::$widht + self::$height);
    }
    public static function getArea(){
        return self::$widht*self::$height;
    }
}
Rectangle::$widht = 10;
Rectangle::$height = 12;
echo Rectangle::getArea()."<br>";
echo Rectangle::getPerimeter();

class Demo{
    function __construct()
    {
        Rectangle::$widht = 15;
        Rectangle::$height = 12;
        echo Rectangle::getPerimeter();
    }
}
new Demo();