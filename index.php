<?php

require_once("classes/User.class.php");

//echo "hello world";

//USER OBJECT
// Attributes: username, password, email, firstname, lastname, dateofbirth
// Methods:
//  changeEmail(string email),
//  calculateAge (date),
//  createUser(string name, string lastname, string username, string password),
//  deleteUser(),
//  updateUser(string firstname, string lastname)

$user1 = new User("coder34","Michael","Jackson","smoothcriminal@gmail.com");
$user2 = new User("girlcode","Jannetl","Jackson","popgirl@gmail.com");


print_r($user1);
print_r($user2);

if( $user1->setEmail("huh@good.us") ){
    echo "Email changed successfully";
}else{
    echo "Email not changed";
};

print_r($user1);

$user1->setEmail("asdfasds");
print_r($user1);


?>