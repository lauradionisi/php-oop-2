<?php

ini_set('display_errors', 1);

require_once 'user.php';
require_once 'user-role.php';

// USER1

$user1 = new User("Mario", "Rossi");

$user1->setUsername("MaRosso");
$user1->setEmail("mario@gmail.com");
$user1->setPassword("mario1");
$user1->subscription_date = "11/05/2021";

var_dump($user1);


// USER ROLE1

$role1 = new UserRole("Mario", "Rossi");
$role1->setRole("Administrator");
var_dump($role1);


// USER2

$user2 = new User("Paolo", "Bianchi");

$user2->setUsername("PaoloBi");
$user2->setEmail("paolo12@gmail.com");
$user2->setPassword("paoloxd");
$user2->subscription_date = "10/05/2021";

var_dump($user2);

// USER ROLE2

$role2 = new UserRole("Paolo", "Bianchi");
$role2->setRole("Editor");
var_dump($role2);



