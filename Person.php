<?php

    class Person
    {
        public $fullname = false;
        public $givenname = false;
        public $familyname = false;
        public $room = false;

        function get_name()
        {
            if ($this->fullname !== false) return $this->fullname;

            if ($this->familyname !== false && $this->givenname !== false) 
            {            
                return $this->givenname . ' ' . $this->familyname;
            }
            return false;            
        }

        function get_room()
        {
            if($this->room !== false) return $this->room;

            return false;
        }
    }

$chuck = new Person();
$chuck->fullname = "Chuck Severance";
$chuck->room = "4429NQ";

$colleen = new Person();
$colleen->familyname = "van Lent";
$colleen->givenname = "Colleen";
$colleen->room = "3439NQ";


print "Name: " . $chuck->get_name() . "</br>";
print "Room: " .$chuck->get_room() . "</br>";

print "Name: " . $colleen->get_name() . "</br>";







?>