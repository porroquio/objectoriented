<?php

class User {
    
//USER OBJECT
// Attributes: username, password, email, firstname, lastname, dateofbirth
    public $username;
    private $password;
    public $email;
    public $firstname;
    public $lastname;
    private $dateofbirth;

    function __construct($newUsername, $newFirsName, $newLastName, $newEmail) {
            $this -> username = $newUsername;
            $this -> firstname = $newFirsName;
            $this -> lastname = $newLastName;
            $this -> email = $newEmail;
    }

    function changeEmail($newEmail){
        $this -> email = $newEmail;
    }


// Methods:
//  changeEmail(string email),
//  calculateAge (date),
//  createUser(string name, string lastname, string username, string password),
//  deleteUser(),
//  updateUser(string firstname, string lastname)
    
    
    
    
    
    
    
}



?>