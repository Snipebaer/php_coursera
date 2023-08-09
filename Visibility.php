<?php

class MyClass
{
    public $pub = "Public";
    protected $pro = "Protected";
    private $priv = "Private";

    function printHello()
    {
        echo $this->pub . "</br>";
        echo $this->pro . "</br>";
        echo $this->priv . "</br>";
    }
}

$obj = new MyClass();

echo $obj->pub . "</br>";
//echo $obj->pro . "</br>"; // wont work cause its protected
//echo $obj->priv . "</br>"; // wont work cause its private
echo $obj->printHello(); // works fine because the method was definied inside the class
?>