<?php
	class A
	{
	
		public $attribute_1 = 10;
		//..
		
		function method_1()
		{
		//..
		echo "ok";
		}
	}
	
	class B extends A
	{
	    public $attribute_2;
	    public  function method_2(){
	        return $this -> attribute_1;
        }

	}
	$b = new B;
	$b -> attribute_2 = "Class B";
	echo $b -> method_2();

//	echo $b -> method_1();
