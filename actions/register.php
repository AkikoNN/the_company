<?php
include "../classes/User.php";

//create object or intantiate
$user_obj = new User;

$user_obj->store($_POST);

//$_POST contain all values of the input
