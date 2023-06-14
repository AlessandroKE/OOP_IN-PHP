<?php

//defining a class 
class User{
    //All properties and methods are defined inside the class
public $username;
private $email;
public $role = 'member';

public function __construct($username, $email) {
        $this->username = $username;
        $this->email = $email;
}


//Getters

public function getEmail() {
    return $this->email;
}


//Setters

// Checking whether email is valid inorder to update
public function setEmail($email)
{
    if(strpos($email,'@') >-1) {
        $this->email = $email;
    }
}

}
class AdminUser extends User {

    public $level;
    public $role = 'admin';
    // You can add additional properties and methods specific to the AdminUser class here
    // This class inherits the properties and methods from the User class

    public function __construct($username, $email, $level) {
    $this->level = $level;
    parent::__construct($username, $email);
}

}
$sandro = new User("sandro", 'sandrokoome472@gmail.com');

$kamau = new AdminUser('sandro', 'kamau@gmail.com', 'admin');

echo $kamau->username ."<br>";
echo $kamau->getEmail() ."<br>";
echo $kamau->level ."<br>";


echo $sandro->role . "<br>";
echo $kamau->role . "<br>";
