<?php

require_once 'User.php';

$name = $_POST['name'];
$username = $_POST['username'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$currentUser = new User($name, $username, $phone, $address);

$currentUser->showProfile();
?>