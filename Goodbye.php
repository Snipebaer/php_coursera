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
class Social extends Hello
{
    function bye()
    {
        if (strtolower($this->lang) == "fr") return "Au revoir!";
        if (strtolower($this->lang) == "es") return "Adios!";

        return "goodbye!";
    }
}



?>