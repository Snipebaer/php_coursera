<?php

class Hello
{
    protected $lang;

    function __construct($lang)
    {
        $this->lang = $lang;
    }

    function greet()
    {
        if (strtolower($this->lang) == "fr") return "Bonjour";
        if (strtolower($this->lang) == "en") return "Hello";
    }
}

$hi = new Hello("FR");
echo $hi->greet() . "</br>";

$cool = new Hello("EN");
echo $cool->greet() . "</break>";

?>