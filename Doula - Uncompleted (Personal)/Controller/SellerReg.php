<?php

include "Operations/SellerOperations.php";

$seller = new Seller("Joy Khan", "joy@gmail.com", "12345", "Male", "20/01/2001", "0129342534", "Dhaka", "234234224", "Computer Shop", "ASF234523", "345435", "4353453453");

$object = new OSeller();
$object->Insert($seller);


?>