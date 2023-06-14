<?php

//defining a class 
class User{
    //All properties and methods are defined inside the class
public $username = 'Alessandro';
public $email = 'Alessandro@gmail.com';

// creating a method inside the class
public function addFreind(){
    //$this-> used to refer to the current object
    return "$this->username a new Guru has been created";
}
}

//creting a new user and storing it in variable
//creating a new instance of a class

$sandro = new User();
//The -> arrow operator is used to access a property or method of an object. 
echo $sandro->username . "<br>";
echo $sandro->email . "<br>";
echo $sandro->addFreind() . "<br>";
//function to determine which class an object is in  (get_class())
//function to determine all variables available in the class (get_class_variable())
//print_r(get_class_vars(User::class)) . '<br>';
// Using get_class_vars()
$classVariables = get_class_vars(User::class);
$variableNames = array_keys($classVariables);

echo 'These are the variables available: ' . implode(', ', $variableNames);
//echo 'This class is ' . get_class($sandro);