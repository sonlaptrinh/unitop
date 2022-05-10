<?php
class Demo
{
    public $attribute_1;
    private $attribute_2;
    protected $attribute_3 = 60;
    private function show(){
        return $this -> attribute_1;
    }

}
//$a = new Demo;
//
//$a -> attribute_1 = 15;
//echo $a ->attribute_1."<br>";
//echo $a ->show();

//$a -> attribute_2 = 20;
//echo $a -> attribute_2;

class User extends Demo{

    function __construct()
    {
        echo $this -> attribute_3;
    }
}
new User;
$u = new User;

