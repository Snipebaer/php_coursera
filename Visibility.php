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



?>