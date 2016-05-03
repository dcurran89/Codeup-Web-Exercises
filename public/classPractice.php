<?php
//This is the "plan/blueprint"
class Person
{
    public $firstName;
    public $lastName;
    public $uniqueIdentifier;
    public $fruit = array();
    public function roamCountryside(){ //functions in classes are called METHODS
        $distance = mt_rand(1,10);
        return $this->firstName . ' ' . $this->lastName . " is walking {$distance} miles";
    }
    public function addFruit($fruit){
        $this->fruit[] = $fruit;
    }
}

//This is an Instantiated Object of the Class Person
$person = new Person();

$person->firstName = 'Daniel';
$person->lastName = 'Curran';
$person->fruit = ['orange', 'apple'];

var_dump($person);
echo $person->roamCountryside();

//this is Instantiation 2 of the Person class
$person2 = new Person();

$person2->firstName = 'Isaac';
$person2->lastName = 'Castillo';

//add some more fruit using the function addFruit()
$person->addFruit('banana');
var_dump($person);



?>