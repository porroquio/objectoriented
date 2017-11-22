<?php

class User {
    
//USER OBJECT
// Attributes: username, password, email, firstname, lastname, dateofbirth
    public $username;
    private $password;
    private $email;
    public $firstname;
    public $lastname;
    private $dateofbirth;

    function __construct($newUsername, $newFirsName, $newLastName, $newEmail) {
            $this -> username = $newUsername;
            $this -> firstname = $newFirsName;
            $this -> lastname = $newLastName;
            $this -> email = $newEmail;
    }







    function setEmail($newEmail){
        if (filter_var($newEmail, FILTER_VALIDATE_EMAIL)) {
            $this -> email = $newEmail;
            return true;
        }else{
            return false;
        }
    }
    
    function getEmail(){
        return $this->email;
    }
    
    
    
    
    
    
    
    function setPassword($newPassword){
        
            //TO DO: Validate password: more than 7 characters & it must have letters and numbers
            $this -> email = $newPassword;
            
    }






// Methods:
//  __construct(string username, string firstname, string lastname, string email),
//  setEmail(string email), getEmail(),
//  setAttribute(attribute), getAttribute(),
//  calculateAge (date)
    
    
}



?>