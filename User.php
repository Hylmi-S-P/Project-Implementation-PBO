<?php

class User {
    private $name;
    private $username;
    private $phone;
    private $address;

    public function __construct($name, $username, $phone, $address) {
        $this->name = $name;
        $this->username = $username;
        $this->phone = $phone;
        $this->address = $address;
    }

    public function showProfile() {
        echo "<p class='text-gray-800'>Hi, my name is " . htmlspecialchars($this->name) . " " . htmlspecialchars($this->username) . "</p>";
        echo "<p class='text-gray-800'>Phone Number : " . htmlspecialchars($this->phone) . "</p>";
        echo "<p class='text-gray-800'>Address : " . htmlspecialchars($this->address) . "</p>";
    }
}
?>