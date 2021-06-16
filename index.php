<?php

require_once ("./classes/user.php");
require_once ("./classes/product.php");
require_once ("./classes/user_premium.php");
require_once ("./classes/credit_cards.php");

// Premium User
$user1= new UserPremium(NULL,"Sofia", "Cima","sofia.ciçmamsil.com",40);

// Product
$firstProduct = new Product("iPhone" , "Apple" , 700);

// CredirCard
$newcredit = new CreditCards(2345569845671200 , 18900);

var_dump($user1 , $firstProduct , $newcredit);



